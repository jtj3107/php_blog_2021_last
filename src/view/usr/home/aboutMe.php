<?php
$pageTitleIcon = '<i class="far fa-id-card"></i>';
$pageTitle = "소개";
?>

<?php require_once __DIR__ . "/../head.php"; ?>
<?php require_once __DIR__ . "/../../part/toastUiSetup.php"; ?>

<div class="flex items-center w-full px-4 py-10 bg-cover card bg-base-200 container mx-auto" style="background-image: url(&quot;https://picsum.photos/id/180/1000/300&quot;);">
  <div class="card glass lg:card-side text-neutral-content">
    <figure class="p-6">
      <img src="https://picsum.photos/id/160/300/200" class="rounded-lg shadow-lg">
    </figure> 
    <div class="max-w-md card-body">
      <h2 class="card-title">Cho</h2> 
      <p>이 웹 사이트는 php로 간단한 로직을 이용하여 만든 웹 사이트로 개인 공부를 위해 만들어진 사이트 입니다.</p> 
      <div class="card-actions">
        <button class="btn glass rounded-full">Get Started</button>
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . "/../foot.php"; ?>