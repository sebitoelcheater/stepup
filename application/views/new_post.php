<link rel="stylesheet" href="<?=base_url()?>/assets/css/tweeter.css">
<div class="last">
<div role="main" aria-labelledby="content-main-heading" class="content-main" id="timeline">
   <div class="content-header">
      <div class="header-inner">
         <h2 id="content-main-heading" class="js-timeline-title">Nuevo Post
         </h2>
      </div>
   </div>
   <div class="stream-container " data-max-id="99287136750153727" data-since-id="349998049189298176">
      <div class="stream profile-stream">
         <ol class="stream-items js-navigable-stream" id="stream-items-id">
<li class="js-stream-item stream-item stream-item expanding-stream-item js-has-navigable-stream open" data-item-id="345215184115208192" id="stream-item-tweet-345215184115208192" data-item-type="tweet" style="margin-top: 8px; margin-bottom: 8px;">
<ol class="expanded-conversation expansion-container js-expansion-container js-navigable-stream" style="height: auto;"><li class="original-tweet-container">
<div class="inline-reply-tweetbox swift">

<form class="tweet-form condensed" method="post" action="<?=base_url()?>index.php/inicio/new_post">
    <input name="titulo" placeholder="Título"><br><br>
    <textarea rows="2" cols="86" name="mensaje" placeholder="Mensaje"></textarea>
    <input type="hidden" name="idM" value="'.$mensaje->id.'">

   <br><br>

    <div class="tweet-button">
      <input type="submit" class="btn primary-btn tweet-action" value="Post">
    </div>
  </div>
</form>
</div></li></ol></li></div>