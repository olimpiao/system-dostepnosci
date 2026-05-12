<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::create([
            'name' => '1.1.1 Treść nietekstowa (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '1.2.1 Tylko audio lub tylko wideo (nagranie) (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '1.2.2 Napisy (nagranie) (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '1.2.3 Audiodeskrypcja lub alternatywa dla mediów (nagranie) (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '1.2.4 Napisy (na żywo)(Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '1.2.5 Audiodeskrypcja (nagranie) (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '1.3.1 Informacje i relacje (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '1.3.2 Zrozumiała kolejność (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '1.3.3 Charakterystyka zmysłowa (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '1.3.4 Układ (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '1.3.5 Określenie przeznaczenia danych wejściowych (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '1.4.1 Użycie koloru (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '1.4.2 Kontrola odtwarzania dźwięku (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '1.4.3 Minimalny kontrast (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '1.4.4 Zmiana rozmiaru tekstu (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '1.4.5 Obrazy tekstu (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '1.4.10 Dopasowanie do ekranu (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '1.4.11 Kontrast elementów nietekstowych (poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '1.4.12 Odstępy w tekście (poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '1.4.13 Treść na wskazaniu lub focusie (poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '2.1.1 Klawiatura (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.1.2 Brak pułapki na klawiaturę (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.1.4 Jednoznakowe skróty klawiszowe (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.2.1 Możliwość regulacji czasu (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.2.2 Pauza, zatrzymanie, ukrycie (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.3.1 Trzy błyski lub mniej (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.4.1 Możliwość pominięcia bloków (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.4.2 Tytuły stron (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.4.3 Kolejność fokusu (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.4.4 Widoczny cel linku (w kontekście) (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.4.5 Wiele dróg (Poziom AA)',
        ]);


        \App\Models\Category::create([
            'name' => '2.4.6 Nagłówki i etykiety (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '2.4.7 Widoczny fokus (Poziom AA)',
        ]);


        \App\Models\Category::create([
            'name' => '2.4.11 Fokus niezasłonięty (Minimum) (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '2.5.1 Gesty dotykowe (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.5.2 Wskaźnik anulowania (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.5.3 Etykieta w nazwie (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.5.4 Aktywacja przez ruch (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '2.5.7 Ruchy przeciągania (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '2.5.8 Rozmiar celu (Minimum) (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '3.1.1 Język strony (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '3.1.2 Język części (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '3.2.1 Po otrzymaniu fokusu (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '3.2.2 Po wprowadzaniu danych (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '3.2.3 Spójna nawigacja (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '3.2.4 Spójna identyfikacja (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '3.2.6 Spójna pomoc (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '3.3.1 Identyfikacja błędu (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '3.3.2 Etykiety lub instrukcje (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '3.3.3 Sugestie korekty błędu (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '3.3.4 Zapobieganie błędom (kontekst prawny, finansowy, danych) (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '3.3.7 Zbędne wprowadzanie danych (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '3.3.8 Dostępne uwierzytelnianie (Minimum) (Poziom AA)',
        ]);

        \App\Models\Category::create([
            'name' => '4.1.2 Nazwa, rola, wartość (Poziom A)',
        ]);

        \App\Models\Category::create([
            'name' => '4.1.3 Komunikaty o stanie (Poziom AA)',
        ]);
    }
}
