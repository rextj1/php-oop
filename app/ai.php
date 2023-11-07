<?php
  private function preprocess($data)
  {
      $preprocessed = [];

      foreach ($data as $row) {
          $preprocessed[] = [
              $row->bedrooms,
              $row->bathrooms,
              $row->sqft_living,
              $row->sqft_lot,
              $row->floors,
              $row->waterfront,
              $row->view,
              $row->condition,
              $row->grade,
              $row->sqft_above,
              $row->sqft_basement,
              $row->yr_built,
              $row->yr_renovated,
              $row->zipcode,
              $row->lat,
              $row->long
          ];
      }

      return $preprocessed;
  }