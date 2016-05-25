<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TeamTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Testa se a criação de um novo time no banco de dados procede com sucesso
     */
    public function testCreateANewTeam()
    {
        \App\Team::create([
            'name' => 'Vasco',
            'state' => 'RJ',
            'abbr' => 'VAS'
        ]);

        $this->seeInDatabase('teams', ['name' => 'Vasco']);
    }
}
