<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(env('DB_PREFIX').'recipes')->insert([
            ['name' => 'Afrikanischer Eintopf', 'example' => 'mit Kohlrübe und Erdnüssen'],
            ['name' => 'Gebackener Blumenkohl', 'example' => 'z.B. mit Curry'],
            ['name' => 'Blumenkohlsalat', 'example' => 'mit Mayonnaise oder Joghurt'],
            ['name' => 'Blumenkohlcremesuppe', 'example' => 'mit Kartoffelstückchen'],
            ['name' => 'Blumenkohlcurry', 'example' => 'in cremiger Sauce'],
            ['name' => 'Brathering', 'example' => 'mit Porreepfanne'],
            ['name' => 'Braumeistersteak', 'example' => 'mit vielen Zwiebeln'],
            ['name' => 'Brokkolicremesuppe', 'example' => 'mit Kartoffelstückchen'],
            ['name' => 'Bruschetta', 'example' => 'auf geröstetem Baguette'],
            ['name' => 'Caprese Salat', 'example' => 'Tomate, Mozzarella, Basilikum'],
            ['name' => 'Champignoncremesuppe', 'example' => 'mit Stückchen'],
            ['name' => 'Chili con carne', 'example' => 'mit Käse überbacken'],
            ['name' => 'Chili sin carne', 'example' => 'mit Bulgur'],
            ['name' => 'Chicoreesalat', 'example' => 'mit Apfel oder Orange'],
            ['name' => 'Falafel', 'example' => 'mit Minzjoghurt'],
            ['name' => 'Fish & Chips', 'example' => 'mit Remoulade und ein bisschen Essig'],
            ['name' => 'Folienfisch', 'example' => 'und Salat'],
            ['name' => 'Geschnetzeltes', 'example' => 'süß-sauer, mit Ananas'],
            ['name' => 'Geschnetzeltes', 'example' => 'in Pilzsahnesauce'],
            ['name' => 'Gulasch', 'example' => 'mit Kartoffeln und Rotkohl'],
            ['name' => 'Brathähnchen', 'example' => 'gefüllt mit Äpfeln'],
            ['name' => 'Brathähnchen', 'example' => 'mit Hühnerleber und Champignons'],
            ['name' => 'Brathähnchen', 'example' => 'mit Curry und Paprika'],
            ['name' => 'Humusteller', 'example' => ' mit Auberginenmus'],
            ['name' => 'Kartoffeln mit Quark', 'example' => 'und frischem Dill'],
            ['name' => 'Kartoffelsuppe', 'example' => 'mit Würstchen'],
            ['name' => 'Käsetoast', 'example' => 'aus der Pfanne'],
            ['name' => 'Kasslerbraten', 'example' => 'mit Sauerkraut'],
            ['name' => 'Kartoffel-Broccoli-Pfanne', 'example' => 'mit ganz viel Knoblauch'],
            ['name' => 'Krabben', 'example' => 'in Knoblauch gebraten'],
            ['name' => 'Kumpir', 'example' => 'mit Grillgemüse'],
            ['name' => 'Lachs in Alufolie', 'example' => 'mit Zwiebeln und Knobi'],
            ['name' => 'Leber', 'example' => 'mit Zwiebeln gebraten'],
            ['name' => 'Linseneintopf', 'example' => 'klassisch mit Würstchen'],
            ['name' => 'Linseneintopf', 'example' => 'asiatisch mit viel Curry'],
            ['name' => 'Nudelauflauf', 'example' => 'mit Schinken'],
            ['name' => 'Nudelauflauf', 'example' => 'mit Thunfisch'],
            ['name' => 'Nudeln', 'example' => 'in Tomatensauce'],
            ['name' => 'Nudeln', 'example' => 'mit Käsesauce'],
            ['name' => 'Nudeln', 'example' => 'Putanesca - Oliven und Anchovis'],
            ['name' => 'Nudeln', 'example' => 'Carbonara - Speck und Ei'],
            ['name' => 'Nudeln', 'example' => 'all\'Arrabiata - chön charf'],
            ['name' => 'Ofengemüse', 'example' => 'z.B. mediterran'],
            ['name' => 'Ofenkartoffel', 'example' => 'mit selbst gemachter Sour Cream'],
            ['name' => 'Omelette', 'example' => 'mit Räucherlachs'],
            ['name' => 'Omelette', 'example' => 'mit Chorizo und Paprika'],
            ['name' => 'Pizza', 'example' => 'mit allem, was da ist, und doppelt Käse'],
            ['name' => 'Rinderbraten', 'example' => 'mit Meerrettichsauce'],
        ]);
    }
}
