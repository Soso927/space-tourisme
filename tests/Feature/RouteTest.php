<?php

namespace Tests\Feature;

use Tests\TestCase;

class RouteTest extends TestCase
{
    /** @test */
    public function la_page_accueil_fonctionne()
    {
        // Simule une visite sur la page d'accueil
        $response = $this->get('/');
        
        // Vérifie que la page répond avec succès (code 200)
        $response->assertStatus(200);
        
        // Vérifie qu'un texte spécifique est présent
        $response->assertSee('Space Tourisme');
    }
    
    /** @test */
    public function la_page_destinations_fonctionne()
    {
        $response = $this->get('/destinations');
        $response->assertStatus(200);
    }
    
    /** @test */
    public function la_page_equipage_fonctionne()
    {
        $response = $this->get('/equipage');
        $response->assertStatus(200);
    }
    
    /** @test */
    public function la_page_technologies_fonctionne()
    {
        $response = $this->get('/technologies');
        $response->assertStatus(200);
    }
    
    /** @test */
    public function une_page_inexistante_retourne_404()
    {
        $response = $this->get('/page-qui-nexiste-pas');
        $response->assertStatus(404);
    }
    /** @test */
public function la_page_accueil_fonctionne_en_francais()
{
    // Définir la locale en français
    app()->setLocale('fr');
    
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('Destinations'); // mot français
}

/** @test */
public function la_page_accueil_fonctionne_en_anglais()
{
    // Définir la locale en anglais
    app()->setLocale('en');
    
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('Destinations'); // même mot ou version anglaise
}

/** @test */
public function le_changement_de_langue_fonctionne()
{
    // Simuler un changement de langue via une route
    $response = $this->get('/lang/en');
    $response->assertRedirect(); // Vérifie la redirection
    $this->assertEquals('en', session('locale')); // Vérifie que la session est mise à jour
}
}