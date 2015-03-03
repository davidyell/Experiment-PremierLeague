<?php

/**
 * @category premierleague 
 * @package MatchesController.php
 * 
 * @author David Yell <neon1024@gmail.com>
 * @when 03/03/15
 *
 */


namespace App\Controller;


class MatchesController extends AppController {

    public function index()
    {
        $matches = $this->Matches->find()
            ->contain([
                'HomeTeams' => [
                    'Players'
                ],
                'AwayTeams' => [
                    'Players'
                ]
            ]);

        $this->set('matches', $matches);
    }

}