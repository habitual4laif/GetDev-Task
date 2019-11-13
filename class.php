
<?php

class Task
    {

        public $filename = 'Task.csv';
          // The nested array to hold all the arrays

        public function convert()
        {

            // Open the file for reading
            if (($h = fopen("{$this->filename}", "r")) !== FALSE)
            {
              // Each line in the file is converted into an individual array that I call $data
              // The items of the array areseparated by coma
              while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
              {
                // Now each individual array is being pushed into the nested array
                $the_big_array[] = $data;

              }

              //  The file is close
              fclose($h);

              //Display the entire table, to see how the information looks like
              $build = '
              <br><br>
                 <table class="table table-hover table-condensed table-bordered">
                   <thead>
                     <th>Item 1</th><th>Item 2</th><th>Item 3</th><th>Item 4</th><th>Item 5</th>
                     <th>Item 6</th><th>Item 7</th><th>Item 8</th><th>Item 9</th><th>Item 10</th>
                   </thead>
                  <tbody>';
             foreach($the_big_array as $row)
             {
             $build .= '<tr>';
             foreach($row as $item)
             {
             $build .= "<td>{$item}</td>";
             }
             $build .= '</tr>';
             }
             $build .= '</tbody></table>';


             // This is the result of the diagonal iteration
              $num = count($the_big_array);

                for($n = 0; $n < $num; $n++){
                    echo $the_big_array[$n][$n], "\n";
                  }

                    return $build;

            }

        }

    }
