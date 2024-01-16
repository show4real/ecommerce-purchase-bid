<?php

// app/Http/Controllers/DatabaseController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use App\Models\Settings;

class DatabaseController extends Controller
{
    public function showForm()
    {
        return view('database.connection-form');
    }


    public function checkConnection(Request $request)
    {
        $host = $request->input('host') == 'localhost' ? '127.0.0.1' : $request->input('host');
        $username = $request->input('username');
        $password = $request->input('password');
        $dbname = $request->input('dbname');

        // Update .env file
            $envContent = File::get(base_path('.env'));
            $envContent = preg_replace("/DB_HOST=(.*)/", "DB_HOST={$host}", $envContent);
            $envContent = preg_replace("/DB_USERNAME=(.*)/", "DB_USERNAME={$username}", $envContent);
            $envContent = preg_replace("/DB_PASSWORD=(.*)/", "DB_PASSWORD={$password}", $envContent);
            $envContent = preg_replace("/DB_DATABASE=(.*)/", "DB_DATABASE={$dbname}", $envContent);

            File::put(base_path('.env'), $envContent);

        try {

            // Clear configuration cache
            Artisan::call('config:cache');

            DB::connection()->getPdo();

            //Artisan::call('migrate');
            
            $success = true;
            $message = '';

        } catch (\Exception $e) {
            $success = false;
            $message = $e->getMessage();
        }

        return view('database.connection-result', compact('success', 'message'));
    }

    public function migrateTable()
    {
        try {
            // Check if tables are installed
            $tables = DB::select("SHOW TABLES");
            $hasTables = count($tables) > 0;

            if ($hasTables) {
                // Drop all tables
                Artisan::call('migrate:reset');
            }

            // Run migrations
            Artisan::call('migrate');

            $message = $hasTables ? 'Tables dropped and re-migrated successfully.' : 'Migrations completed successfully.';
            $success = true;
        } catch (\Exception $e) {
            $message = 'Error resetting migrations: ' . $e->getMessage();
            $success = false;
        }

        //return view('database.connection-result', compact('success', 'message'));

        return redirect()->route('sites');
    }


    public function siteSettings(Request $request){

        return view('database.sites');

    }

    public function siteSetup(Request $request){

        return view('database.completed');

    }

    public function storeSite(Request $request){

        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
        ]);

        $user = new User();

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        //$user->username = $request->username;
        $user->email = $request->email;
        $user->admin = 1;
        $user->password = bcrypt($request->password);
        $user->save();

        $site =new Settings();
        $site->site_name = $request->site_name;
        $site->site_url = $request->site_url;
        $site->save();

        return redirect()->route('sites_connection');
        

    }


  
}
