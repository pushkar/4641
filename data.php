<?php

$reading_list = array (
);

$textbook_req_list = array (
    "http://www.cs.cmu.edu/afs/cs.cmu.edu/user/mitchell/ftp/mlbook.html" => array (
        "Tom Mitchell, Machine Learning. McGraw-Hill, 1997." => "",
    ),
    "downloads/Alppaydin_MachineLearning_2010.pdf" => array (
        "Ethem Alpaydın, Introduction to Machine Learning. Second Edition." => "",
    )
);

$textbook_opt_list = array (
    "http://www.stat.cmu.edu/~larry/all-of-statistics/" => array (
        "Larry Wasserman, All of Statistics. Springer, 2010." => "",
    ),
    "http://webdocs.cs.ualberta.ca/~sutton/book/the-book.html" => array (
        "Richard Sutton and Andrew Barto, Reinforcement Learning: An introduction. MIT Press, 1998." => "",
    ),
    "http://www-stat.stanford.edu/~tibs/ElemStatLearn/" => array (
        "Trevor Hastie, Robert Tibshirani and Jerome Friedman, The Elements of Statistical Learning. Springer, 2009." => "",
    )
);

$software_list = array (
    "http://www.cs.waikato.ac.nz/ml/weka/" => array (
        "WEKA" => "Machine learning software in JAVA that you can use for your projects",
    ),
    "https://github.com/pushkar/ABAGAIL" => array (
        "ABAGAIL" => "Machine learning software in JAVA. This is hosted on my github, so you can contribute too",
    ),
    "http://scikit-learn.org/stable/" => array (
        "scikit-learn" => "A popular python library for supervised and unsupervised learning algorithms",
    ),
    "http://pybrain.org/" => array (
        "pybrain" => "A popular python library for artifical neural networks",
    )
);

$app_list = array (
    "http://www.youtube.com/watch?v=jQXPy9rsaAA" => array (
        "Robosoccer." => "",
    ),
    "http://make3d.cs.cornell.edu/" => array (
        "Make3D - Convert your still image into 3D model." => "",
    ),
    "http://heli.stanford.edu/" => array (
        "Autonomous Helicopter." => "",
    ),
    "http://www.youtube.com/watch?v=SH3bADiB7uQ" => array (
        "Learning to play ping pong." => "",
    ),
    "http://research.ics.aalto.fi/ica/cocktail/cocktail_en.cgi" => array (
        "Cocktail Party Demo." => "",
    )
);


$other_list = array (
    "http://archive.ics.uci.edu/ml/" => array (
        "UCI Machine Learning Repository" => "An online repository of data sets that can be used for machine learning experiments",
    ),
);


function list_reading($arr) {
    echo "<ul>";
    foreach ($arr as $topic => $topic_list) {
        echo "<li>";
        echo "$topic";
        echo "<ul>";
        foreach ($topic_list as $heading => $url) {
            echo "<li>";
            echo "<a href=\"$url\">$heading</a>";
            echo "</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
}


function list_other($arr) {
    echo "<ul>";
    foreach ($arr as $url => $info) {
        echo "<li>";
        foreach ($info as $url_info => $more_info) {
            echo "<a href=\"$url\">$url_info</a>  $more_info";
        }
        echo "</li>";
    }
    echo "</ul>";
}

?>
