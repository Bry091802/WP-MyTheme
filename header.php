<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Theme</title>
    <link rel="stylesheet" href="./output.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head() ?>
  </head>
  <body class="">
    <div class="theTitle text-center">
<a href="<?php echo home_url() ?>">     
     <h1
        class="font-semibold text-[80px] pt-20 hover:text-primary cursor-pointer font-secondary"
      >
        SA DAKO PAROON
      </h1></a>
      <p class="bg-[#C4C4C4] inline-block p-2">
        Opinyon sa mga bagay-bagay sa paligid
      </p>
    </div>

    <div class="header pt-20 font-[18px] font-secondary">
      <div class="container">
        <nav class="nav">
          <ul
            class="flex gap-2 border-y justify-end w-[800px] mx-auto py-2 "
          >
          <?php wp_menu_li() ?>
          </ul>

        </nav>
      </div>
    </div>