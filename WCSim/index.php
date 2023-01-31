<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Variable Declaration

    // Initial Scores (You declare variables in PHP by doing $𝘪𝘯𝘴𝘦𝘳𝘵𝘷𝘢𝘭𝘶𝘦𝘯𝘢𝘮𝘦𝘩𝘦𝘳𝘦 )
    $belgiumScore = $canadaScore = $croatiaScore = $moroccoScore = 0;

    // $_POST is used to collect values from HTML forms with "post" method

        // Morocco's Scores
    $moroccoFirst = $_POST("morocco1");
    $moroccoSecond = $_POST("morocco2");
    $moroccoThird = $_POST("morocco3");

        // Belgium's Scores
    $belgiumFirst = $_POST("belgium1");
    $belgiumSecond = $_POST("belgium2");
    $belgiumThird = $_POST("belgium3");

        // Canada's Scores 
    $canadaFirst = $_POST("canada1");
    $canadaSecond = $_POST("canada2");
    $canadaThird = $_POST("canada3");

        // Croatia's Scores
    $croatiaFirst = $_POST("croatia1");
    $croatiaSecond = $_POST("croatia2");
    $croatiaThird = $_POST("croatia3");

        // Country Flags
    $moroccoFlag = "./IMG/morocco.png";
    $croatiaFlag = "./IMG/Croatia.png";
    $belgiumFlag = "./IMG/belgium.png";
    $canadaFlag = "./IMG/canada.jpg";

        // Game Win/Loss Count (W = Win, L = Loss, N = Null)
    $moroccoW = $moroccoL = $moroccoN = 0;
    $croatiaW = $croatiaL = $croatiaN = 0;
    $belgiumW = $belgiumL = $belgiumN = 0;
    $canadaW  = $canadaL  = $canadaN  = 0;

        // Total Goal Counts
    $moroccoTotal = $moroccoFirst + $moroccoSecond + $moroccoThird;
    $croatiaTotal = $croatiaFirst + $croatiaSecond + $croatiaThird;

// if/else Comparisons

        //Morocco VS Croatia
    if ($moroccoFirst > $croatiaFirst) {
        $moroccoScore += 3;
        $moroccoW += 1;
        $croatiaL += 1;
    } elseif ($morroccoFirst < $croatiaFirst){
        $croatiaScore += 3;
        $croatiaW += 1;
        $moroccoL += 1;
    } else {
        $moroccoScore += 1;
        $croatiaScore += 1;
        $moroccoN += 1;
        $croatiaN += 1;
    }

        // Belgium VS Canada
    if ($belgiumFirst > $canadaFirst) {
        $belgiumScore += 3;
        $belgiumW += 1;
        $canadaL += 1;
    } elseif ($belgiumFirst < $canadaFirst) {
        $canadaScore += 3;
        $canadaW += 1;
        $belgiumL += 1;
    } else {
        $belgiumScore += 1;
        $canadaScore += 1;
        $belgiumN += 1;
        $canadaN += 1;
    }

        // Belgium VS Morocco
    if ($belgiumSecond > $moroccoSecond) {
        $belgiumScore += 3;
        $belgiumW += 1;
        $moroccoL += 1;
    } elseif ($belgiumSecond < $moroccoSecond) {
        $moroccoScore += 3;
        $moroccoW += 1;
        $belgiumL += 1;
    } else {
        $belgiumScore += 1;
        $moroccoScore += 1;
        $belgiumN += 1;
        $moroccoN += 1;
    }

        // Croatia VS Canada
    if ($croatiaSecond > $canadaSecond) {
        $croatiaScore += 3;
        $croatiaW += 1;
        $canadaL += 1;
    } elseif ($croatiaSecond < $canadaSecond) {
        $canadaSecond += 3;
        $canadaW += 1;
        $croatiaL += 1;
    } else {
        $croatiaScore += 1;
        $canadaSecond += 1;
        $croatiaN += 1;
        $canadaN += 1;
    }

        // Croatia VS Belgium
    if ($croatiaThird > $belgiumThird) {
        $croatiaScore += 3;
        $croatiaW += 1;
        $belgiumL += 1;
    } elseif ($croatiaThird < $belgiumThird) {
        $belgiumScore += 3;
        $belgiumW += 1;
        $croatiaL += 1;
    } else {
        $croatiaScore += 1;
        $belgiumScore += 1;
        $croatiaN += 1;
        $belgiumN += 1;
    }

        // Canada VS Morocco
    if ($canadaThird > $moroccoThird) {
        $canadaScore += 3;
        $canadaW += 1;
        $moroccoL += 1;
    } elseif ($canadaThird < $moroccoThird) {
        $moroccoScore += 3;
        $moroccoW += 1;
        $canadaL += 1;
    } else {
        $canadaScore += 1;
        $moroccoScore += 1;
        $moroccoN += 1;
        $canadaN += 1;
    }   
?>

<div class="container-fluid bg-body-tertiary">
        <nav class="navbar ">
            <div class="container d-flex">
                <div>
                    <a href="index.php">
                        <img src="./IMG/logo.jpg" alt="Logo" width="70">
                    </a>
                </div>
                <div class="align-self-center"> 
                    <h4>World cup Simulator</h4>
                </div>
            </div>
        </nav>
    </div>
    
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <form class="col" action="index.php" method="POST">
                    <div class="row">
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src=".//morocco.png" class="rounded-circle" style="width: 50px">
                            <H3>Morocco</H3>
                        </div>
                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">First Match Score</h4>
                            <div class="col d-flex px-2 justify-content-center align-items-center">
                                <input type="number" name="morocco1" class="w-25" value="0">
                                <span class="fs-1">-</span>
                                <input type="number" name="croatia1" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Croatia</H3>
                            <img src="./IMG/Croatia.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./IMG/belgium.png" class="rounded-circle" style="width: 50px">
                            <H3>Belgium</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Second Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="belgium1" class="w-25" value="0">
                                <span class="fs-1">-</span> 
                                <input type="number" name="canada1" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Canada</H3>
                            <img src="./IMG/canada.jpg" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./IMG/belgium.png" class="rounded-circle" style="width: 50px">
                            <H3>Belgium</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Third Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="belgium2" class="w-25" value="0">
                                <span class="fs-1">-</span> 
                                <input type="number" name="morocco2" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Morocco</H3>
                            <img src="./IMG/morocco.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./IMG/Croatia.png" class="rounded-circle" style="width: 50px">
                            <H3>Croatia</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Fourth Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="croatia2" class="w-25" value="0">
                                <span class="fs-1">-</span> 
                                <input type="number" name="canada2" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Canada</H3>
                            <img src="./IMG/canada.jpg" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./IMG/Croatia.png" class="rounded-circle" style="width: 50px">
                            <H3>Croatia</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Fifth Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" name="croatia3" class="w-25" value="0">
                                <span class="fs-1">-</span> 
                                <input type="number" name="belgium3" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Belgium</H3>
                            <img src="./IMG/belgium.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col border d-flex align-items-center px-2 gap-2">
                            <img src="./IMG/canada.jpg" class="rounded-circle" style="width: 50px">
                            <H3>Canada</H3>
                        </div>

                        <div class="col bg-secondary-subtle">
                            <h4 class="text-center">Sixth Match Score</h4>
                            <div class="col d-flex justify-content-center align-items-center">
                                <input type="number" Name="canada3" class="w-25" value="0">
                                <span class="fs-1">-</span> 
                                <input type="number" name="morocco3" class="w-25" value="0">   
                            </div>
                        </div>
                        
                        <div class="col border d-flex justify-content-end align-items-center px-2 gap-2">
                            <H3>Morocco</H3>
                            <img src="./IMG/morocco.png" class="rounded-circle" style="width: 50px">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center py-2">
                        <button class="btn btn-danger fs-4  " type="submit" name="submit" >>>>> Simulate <<<<</button>
                    </div>
                </form>

                <div class="col broder border-warning">
                    <table class="table table-dark table-striped text-center">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Selection</th>
                            <th scope="col">Pts</th>
                            <th scope="col">GP</th>
                            <th scope="col">W</th>
                            <th scope="col">N</th>
                            <th scope="col">L</th>
                            <th scope="col">L</th>
                            <th scope="col">L</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <img src="./IMG/morocco.png" class="rounded-circle" style="width: 80px">
                                    <h3>Morocco</h3>
                                </td>
                                <td><?php echo $moroccoPoints ?></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <img src="./IMG/Croatia.png" class="rounded-circle" style="width: 80px">
                                    <h3>Croatia</h3>
                                </td>
                                <td><?php echo $croatiaPoints ?></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    <img src="./IMG/belgium.png" class="rounded-circle" style="width: 80px">
                                    <h3>Belgium</h3>
                                </td>
                                <td><?php echo $belgiumPoints ?></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>
                                    <img src="./IMG/canada.jpg" class="rounded-circle" style="width: 80px">
                                    <h3>Canada</h3>
                                </td>
                                <td><?php echo $canadaPoints ?></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
  
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>