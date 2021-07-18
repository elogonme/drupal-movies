<?php

namespace Drupal\module_search\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Search contoller for searching movies
 */
class SearchController extends ControllerBase
{
  public function movieList()
  {
    $movies = [
      ['name' => 'Matrix', 'year' => '1999'],
      ['name' => 'Fight Club', 'year' => '1999'],
      ['name' => 'Inception', 'year' => '2010'],
      ['name' => 'Interstellar', 'year' => '2014'],
      ['name' => 'Wonder Woman', 'year' => '2017'],
    ];

    $myMovies = '';
    foreach ($movies as $movie) {
      $myMovies .= '<li>' . $movie['name'] . " " . $movie['year'] . "</li>";
    }

    return [
      '#type' => 'markup',
      '#markup' => '<h1>' . $this->t('Searched Movies') . '</h1>' . '<ol>' . $myMovies . '</ol>'
    ];
  }
}
