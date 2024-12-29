<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>PROJECT</h1>
        <div class="project-list">
            <?php
            // Data proyek
            $projects = [
                [
                    "title" => "Mengikuti Olimpiade",
                    "description" => "Ikut serta dalam olimpiade mata pelajaran biologi di Sekolah.",
                    "link" => "www.olimpiade.com",
                ],
                [
                    "title" => "Membuat Web Portofolio",
                    "description" => "Pembuatan Web Portofolio untuk menyelesaikan tugas akhir semester.",
                    "link" => "#",
                ],
            ];

            // Loop data proyek
            foreach ($projects as $project) {
                echo "
                <div class='project-card'>
                    <div class='image-placeholder'></div>
                    <h3>{$project['title']}</h3>
                    <p>{$project['description']}</p>
                    <a href='{$project['link']}'>Link</a>
                </div>
                ";
            }
            ?>
        </div>
    </div>
</body>
</html>