<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $faker = 
        [
          [
            'firstname' => "Devonte",
            'lastname' => "Jaskolski",
            'city' => "Gottliebfurt",
            'country' => "Guinea",
            'poste' => "Transportation Attendant",
            'phone' => "(870) 797-5388 x224",
            'website' => "klein.com",
            'email' => "karlie.becker@example.org",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Martine",
            'lastname' => "Casper",
            'city' => "Handmouth",
            'country' => "Congo",
            'poste' => "Surgical Technologist",
            'phone' => "(242) 410-1900 x0911",
            'website' => "maggio.com",
            'email' => "ydenesik@example.net",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Kris",
            'lastname' => "Hickle",
            'city' => "New Audie",
            'country' => "Chad",
            'poste' => "Heating Equipment Operator",
            'phone' => "1-623-593-1688",
            'website' => "heathcote.com",
            'email' => "lheller@example.com",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Alexandro",
            'lastname' => "Yundt",
            'city' => "East Kassandraside",
            'country' => "Burkina Faso",
            'poste' => "Welding Machine Setter",
            'phone' => "(543) 203-3546",
            'website' => "nolan.com",
            'email' => "little.gayle@example.com",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Kailey",
            'lastname' => "Jones",
            'city' => "Gutkowskistad",
            'country' => "El Salvador",
            'poste' => "Administrative Law Judge",
            'phone' => "(259) 359-5221 x72017",
            'website' => "boyle.com",
            'email' => "carlie.olson@example.org",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Edgardo",
            'lastname' => "Mayert",
            'city' => "Port Fernando",
            'country' => "Ecuador",
            'poste' => "Government Property Inspector",
            'phone' => "775-790-5270",
            'website' => "raynor.info",
            'email' => "vwest@example.net",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Cleo",
            'lastname' => "Marvin",
            'city' => "East Pierreland",
            'country' => "Singapore",
            'poste' => "Craft Artist",
            'phone' => "+1-494-328-6690",
            'website' => "kautzer.org",
            'email' => "wolf.murl@example.org",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Mauricio",
            'lastname' => "Rolfson",
            'city' => "Cleofurt",
            'country' => "Vietnam",
            'poste' => "Skin Care Specialist",
            'phone' => "636.913.3691 x418",
            'website' => "simonis.com",
            'email' => "emorissette@example.net",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Yasmeen",
            'lastname' => "Purdy",
            'city' => "Port Fletcher",
            'country' => "Guam",
            'poste' => "Inspector",
            'phone' => "+17069805982",
            'website' => "heaney.com",
            'email' => "helena.lemke@example.org",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Neoma",
            'lastname' => "Hoppe",
            'city' => "Lake Gordon",
            'country' => "South Georgia and the South Sandwich Islands",
            'poste' => "Safety Engineer",
            'phone' => "647-876-3260 x249",
            'website' => "schmitt.com",
            'email' => "rosalia82@example.net",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Filomena",
            'lastname' => "Zieme",
            'city' => "South Lennabury",
            'country' => "Burkina Faso",
            'poste' => "Central Office",
            'phone' => "317.509.0169 x78429",
            'website' => "mante.info",
            'email' => "layla.gleichner@example.net",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Sallie",
            'lastname' => "Kunde",
            'city' => "West Websterville",
            'country' => "Bermuda",
            'poste' => "Educational Psychologist",
            'phone' => "582.580.2239 x7204",
            'website' => "haag.com",
            'email' => "shannon53@example.org",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Tevin",
            'lastname' => "Monahan",
            'city' => "Dooleyside",
            'country' => "Honduras",
            'poste' => "Supervisor of Police",
            'phone' => "+1-763-523-8662",
            'website' => "mueller.com",
            'email' => "jasen98@example.net",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Meta",
            'lastname' => "Shanahan",
            'city' => "South Chesley",
            'country' => "Turkey",
            'poste' => "Sales and Related Workers",
            'phone' => "(359) 453-9613 x5660",
            'website' => "hermann.info",
            'email' => "terry.karelle@example.org",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Chris",
            'lastname' => "Stanton",
            'city' => "South Kylahaven",
            'country' => "Tonga",
            'poste' => "User Experience Manager",
            'phone' => "1-663-234-5831",
            'website' => "jones.com",
            'email' => "freeda.lynch@example.org",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Alexander",
            'lastname' => "Bailey",
            'city' => "Creminchester",
            'country' => "Poland",
            'poste' => "Loan Officer",
            'phone' => "1-781-888-8543 x0460",
            'website' => "rolfson.com",
            'email' => "jherman@example.net",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Marian",
            'lastname' => "Cummings",
            'city' => "East Candaceland",
            'country' => "Puerto Rico",
            'poste' => "Technical Specialist",
            'phone' => "1-257-251-3299 x9265",
            'website' => "gutkowski.com",
            'email' => "quitzon.nicolette@example.net",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Shane",
            'lastname' => "Fahey",
            'city' => "Connorborough",
            'country' => "Solomon Islands",
            'poste' => "Electrician",
            'phone' => "+1.474.602.7556",
            'website' => "nader.net",
            'email' => "josianne06@example.net",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Darian",
            'lastname' => "Doyle",
            'city' => "South Elvera",
            'country' => "Kazakhstan",
            'poste' => "Organizational Development Manager",
            'phone' => "(730) 923-4521 x4398",
            'website' => "frami.info",
            'email' => "ghoppe@example.net",
            'email_verified_at' => "2020-02-16 11:30:58"
          ],
          [
            'firstname' => "Aurelia",
            'lastname' => "Bruen",
            'city' => "Rempelport",
            'country' => "Cape Verde",
            'poste' => "Occupational Health Safety Technician",
            'phone' => "+1-802-990-6598",
            'website' => "veum.com",
            'email' => "ena.west@example.org",
            'email_verified_at' => "2020-02-16 11:30:58"
          ]
        ];
        for ($i=0; $i < count($faker) - 1; $i++) {
            factory(\App\User::class)->create([
                'firstname' => $faker[$i]['firstname'],
                'lastname' => $faker[$i]['lastname'],
                'city' => $faker[$i]['city'],
                'country' => $faker[$i]['country'],
                'poste' => $faker[$i]['poste'],
                'phone' => $faker[$i]['phone'],
                'website' => $faker[$i]['website'],
                'email' => $faker[$i]['email'],
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
