<?php

$reading_list = array ( 
    "Linear Algebra" => array (
        "Linear Algebra and Eigenproblems" => "downloads/Eigenproblems.fm.pdf",
    ),
    "Support Vector Machines" => array (
        "An ICML tutorial on SVMs" => "http://www.support-vector.net/icml-tutorial.pdf",
        "Christopher Burges tutorial on SVMs for pattern recognition" => "http://research.microsoft.com/pubs/67119/svmtutorial.pdf",
        "Scholkopf's NIPS tutorial slides on SVMs and kernel methods" => "downloads/svm-scholkopf.ps",
    ),
    "Deep Learning" => array (
        "Learning Deep Architectures for AI" => "downloads/learning_deep_architectures.pdf",
        "Representation Learning" => "downloads/representation_learning.pdf",
    ),
    "Boosting" => array (
        "Schapire's Introduction" => "downloads/boosting.ps",
        "Jiri Matas and Jan Sochman's Slides" => "downloads/adaboost_matas.pdf",
    ),
    "Information Theory" => array (
        "Charles Isbell's Note on Information Theory" => "downloads/InfoTheory.fm.pdf",
        "An Introduction to Information Theory and Entropy" => "downloads/gentle_intro_to_information_theory.pdf",
    ),
    "Optimization" => array (
        "No Free Lunch Theoreom" => "downloads/nfl-optimization-explanation.pdf",
    ),
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
    ),
    "http://www.mathworks.com/products/neural-network/examples.html" => array (
        "MATLAB NN Toolbox" => "The toolbox supports supervised learning with feedforward, radial basis, and dynamic networks and unsupervised learning with self-organizing maps and competitive layers.",
    ),
    "http://www.cs.ubc.ca/~murphyk/Software/MDP/mdp.html" => array (
        "Murphy's MDP Toolbox for Matlab" => "",
    ),
    "http://www.cc.gatech.edu/~dellaert/FrankDellaert/Software.html" => array (
        "MATLAB Clustering Package" => "By <a href=\"http://www.cc.gatech.edu/~dellaert/FrankDellaert/Frank_Dellaert/Frank_Dellaert.html\">Frank Dellaert</a>",
    ),
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
    ),
    "http://www.youtube.com/watch?v=DleXA5ADG78" => array (
        "Brains, Sex, and Machine Learning" => "Geoffrey Hinton <a href=\"http://yann.lecun.com/ex/fun/\">(facts)</a> in GoogleTechTalks.",
    )
);


$other_list = array (
    "http://archive.ics.uci.edu/ml/" => array (
        "UCI Machine Learning Repository" => "An online repository of data sets that can be used for machine learning experiments.",
    ),
    "http://snap.stanford.edu/data/" => array (
        "Stanford Large Network Dataset" => "Dataset of large social and information networks.",
    ),
    "http://www.cvlibs.net/datasets/kitti/index.php" => array (
        "Vision Benchmark Suite" => "Autonomous car dataset",
    ),
    "http://kevinchai.net/datasets" => array (
        "Other datasets" => "",
    )
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
