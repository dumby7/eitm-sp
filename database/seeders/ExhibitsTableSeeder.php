<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExhibitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exhibits = [
            [
                'unique_name' => 'test01',
                'picture_name' => 'exhibits/FordGT40/GT40.jpeg;exhibits/FordGT40/FordGT40_02.jpg;exhibits/FordGT40/GT40.jpeg;exhibits/FordGT40/FordGT40_02.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03;Test textu u obrazku 04',
                'date_created' => '2023-01-01',
                'date_modified' => '2023-01-02',
                'title' => 'Ford GT 40',
                'description' => 'The Ford GT40 is a high-performance endurance racing car designed and built by the Ford Motor Company. It grew out of the "Ford GT" (for Grand Touring) project, an effort to compete in European long-distance sports car races, against Ferrari, who had won the prestigious 24 Hours of Le Mans race from 1960 to 1965. Ford succeeded with the GT40, winning the 1966 through 1969 races.

The effort began in the early 1960s when Ford Advanced Vehicles began to build the GT40 Mk I, based upon the Lola Mk6, at their base in Slough, UK. After disappointing race results, the engineering team was moved in 1964 to Dearborn, Michigan (Kar Kraft). The range was powered by a series of American-built Ford V8 engines modified for racing.

In 1966, Ford with the GT40 Mk II car broke Ferrari\'s streak at Le Mans, thus becoming the first American manufacturer to have won a major European race since Jimmy Murphy\'s triumph with Duesenberg at the 1921 French Grand Prix. In 1967, the Mk IV car became the only car designed and built entirely in the United States to achieve the overall win at Le Mans.

The Mk I, the oldest of the cars, won in 1968 and 1969, the second chassis to win Le Mans more than once. (This Ford/Shelby chassis, #P-1075, was believed to have been the first until the Ferrari 275P chassis 0816 was revealed to have won the 1964 race after winning the 1963 race in 250P configuration and with a 0814 chassis plate). Its American Ford V8 engine, originally of 4.7-liter displacement capacity (289 cubic inches), was enlarged to 4.9 liters (302 cubic inches), with custom alloy Gurney–Weslake cylinder heads.

The "40" represented its height of 40 inches (1.02 m), measured at the windshield, the minimum allowed. The first 12 "prototype" vehicles carried serial numbers GT-101 to GT-112. Once "production" began, the Mk I, Mk II, Mk III, and Mk IV were numbered GT40P/1000 through GT40P/1145, and thus officially "GT40s". The Mk IVs were numbered J1-J12.

The contemporary Ford GT is a modern homage to the GT40',
            ],
            [
                'unique_name' => 'test02',
                'picture_name' => 'exhibits/JaguarEType/EType.jpg',
                'picture_description' => 'Test textu u obrazku 01',
                'date_created' => '2023-02-01',
                'date_modified' => '2023-02-02',
                'title' => 'Jaguar E-type',
                'description' => 'The Jaguar E-Type, or the Jaguar XK-E for the North American market, is a British sports car that was manufactured by Jaguar Cars Ltd between 1961 and 1974. Its combination of beauty, high performance, and competitive pricing established the model as an icon of the motoring world. The E-Type\'s claimed 150 miles per hour (240 km/h) top speed, sub-7-second 0 to 60 mph (97 km/h) acceleration, unitary construction, disc brakes, rack-and-pinion steering, and independent front and rear suspension distinguished the car and spurred industry-wide changes.

The E-Type was based on Jaguar\'s D-Type racing car, which had won the 24 Hours of Le Mans for three consecutive years beginning in 1955.

The E-Type employed what was, for the early 1960s, a novel design principle, with a front subframe carrying the engine, front suspension and front bodywork bolted directly to the body tub. No ladder frame chassis, as was common at the time, was needed and as such the first cars weighed only 1,315 kg (2,899 lb).

It is rumored that, on its debut on 15 March 1961, Enzo Ferrari called it "the most beautiful car ever made", but this statement is not fully confirmed. In 2004, Sports Car International magazine placed the E-Type at number one on their list of Top Sports Cars of the 1960s. In March 2008, the Jaguar E-Type ranked first in The Daily Telegraph\'s online list of the world\'s "100 most beautiful cars" of all time. Outside automotive circles, the E-type has featured in the Diabolik comic series, Austin Powers films and the television series Mad Men.',
            ],
            // Add more exhibits as needed
        ];

        DB::table('exhibits')->insert($exhibits);
    }
}
