 <?php 
 @$id = $_GET['page'];

 ?>
 <div class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?">TCrypt</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <?php 
        switch ($id) {
          case '':
          ?>
          <li><a href="?page=cryptmd5">Crypt md5</a></li>
          <li><a href="?page=decryptmd5">Decrypt md5</a></li>
          <li><a href="?page=cryptsha1">Crypt sha1</a></li>
          <li><a href="?page=decryptsha1">Decrypt sha1</a></li>
          <li><a href="?page=support">Support</a></li>
          <?php
          break;
          case 'cryptmd5':
          ?>
          <li class="active"><a href="?page=cryptmd5">Crypt md5</a></li>
          <li><a href="?page=decryptmd5">Decrypt md5</a></li>
          <li><a href="?page=cryptsha1">Crypt sha1</a></li>
          <li><a href="?page=decryptsha1">Decrypt sha1</a></li>
          <li><a href="?page=support">Support</a></li>
          <?php
          break;
          case 'decryptmd5':
          ?>
          <li><a href="?page=cryptmd5">Crypt md5</a></li>
          <li  class="active"><a href="?page=decryptmd5">Decrypt md5</a></li>
          <li><a href="?page=cryptsha1">Crypt sha1</a></li>
          <li><a href="?page=decryptsha1">Decrypt sha1</a></li>
          <li><a href="?page=support">Support</a></li>
          <?php
          break;
          case 'support':
          ?>
          <li><a href="?page=cryptmd5">Crypt md5</a></li>
          <li><a href="?page=decryptmd5">Decrypt md5</a></li>
          <li ><a href="?page=cryptsha1">Crypt sha1</a></li>
          <li><a href="?page=decryptsha1">Decrypt sha1</a></li>
          <li class="active"><a href="?page=support">Support</a></li>
          <?php
          break;
          case 'cryptsha1':
          ?>
          <li><a href="?page=cryptmd5">Crypt md5</a></li>
          <li><a href="?page=decryptmd5">Decrypt md5</a></li>
          <li class="active" ><a href="?page=cryptsha1">Crypt sha1</a></li>
          <li ><a href="?page=decryptsha1">Decrypt sha1</a></li>
          <li><a href="?page=support">Support</a></li>
          <?php
          break;
          case 'decryptsha1':
          ?>
          <li><a href="?page=cryptmd5">Crypt md5</a></li>
          <li><a href="?page=decryptmd5">Decrypt md5</a></li>
          <li ><a href="?page=cryptsha1">Crypt sha1</a></li>
          <li class="active"><a href="?page=decryptsha1">Decrypt sha1</a></li>
          <li><a href="?page=support">Support</a></li>
          <?php
          break;
          default:
                  # code...
          break;
        }
        ?>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
