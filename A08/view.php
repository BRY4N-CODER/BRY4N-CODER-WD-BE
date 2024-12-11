<?php
include("connect.php");
include("classes.php");

$islandID = $_GET['id'];
$islandInfo;

$islandQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID ='$islandID'";
$islandResult = executeQuery($islandQuery);

while ($islandRow = mysqli_fetch_assoc($islandResult)) {
    $islandInfo = new island(
        $islandRow['islandOfPersonalityID'],
        $islandRow['name'],
        $islandRow['shortDescription'],
        $islandRow['longDescription'],
        $islandRow['color'],
        $islandRow['image']
    );
}

// content 
$contentArray = array();
$islandContentQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandID' ";
$islandContentResult = executeQuery($islandContentQuery);
$islandContentCount = mysqli_num_rows($islandContentResult);

while ($islandContentRow = mysqli_fetch_assoc($islandContentResult)) {
    $ic = new islandContent(
        $islandInfo->color,
        $islandContentRow['image'],
        $islandContentRow['islandOfPersonalityID'],
        $islandContentRow['content']
    );

    array_push($contentArray, $ic);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($islandInfo->name); ?> Island</title>
    <style>
        /* Basic reset and body styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            background: linear-gradient(135deg, #ff5722, #3f51b5, #8bc34a, #ffeb3b);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            color: white;
            overflow-y: auto;
            padding: 2rem;
        }

        /* Animation for the background gradient */
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Container for the content */
        .content {
            text-align: center;
            margin-bottom: 2rem;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(to right, #ffeb3b, #ff5722);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        p {
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 0.05rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        /* Grid for multiple image-description containers */
        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Layout for image and description */
        .image-description {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 1rem;
            border-radius: 10px;
            border: 2px solid transparent;
            background-clip: padding-box, border-box;
            background-origin: border-box;
        }

        .image-description img {
            width: 100%;
            max-width: 300px;
            height: auto;
            border-radius: 8px;
            margin-bottom: 1rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
        }

        .description {
            color: white;
            text-align: center;
            max-width: 300px;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .description:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.2);
        }

        .description p {
            font-size: 1.2rem;
            line-height: 1.6;
            opacity: 0.9;
            font-weight: 500;
            letter-spacing: 0.02rem;
        }

        /* Responsive design for small screens */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            .content-grid {
                grid-template-columns: 1fr;
            }

            .description p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Dynamic Content Title -->
    <div class="content">
        <h1><?php echo htmlspecialchars($islandInfo->name); ?></h1>
        <p>Explore the vibrant island of <?php echo htmlspecialchars($islandInfo->name); ?>!</p>
    </div>

    <!-- Grid layout for image-description -->
    <div class="content-grid">
        <?php foreach ($contentArray as $ic) { ?>
            <div class="image-description">
                <img src="contentpics/<?php echo htmlspecialchars($ic->image); ?>" alt="Emotion Image">
                <div class="description">
                    <p><?php echo htmlspecialchars($ic->content); ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>