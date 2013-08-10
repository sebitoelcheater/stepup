<div class="last">
<table>
<?
$newRespuestas = array();
foreach ($respuestas as $respuesta) {
	$newRespuestas[$respuesta->idM][] = $respuesta;
}
foreach ($mensajes as $mensaje) {
	echo '<tr>';
	foreach ($mensaje as $value) {
		echo '<td>'.$value.'</td>';
	}
	echo '<table>';
		foreach ($newRespuestas[$mensaje->id] as $respuesta) {
			echo '<tr>';
			foreach ($respuesta as $vr) {
				echo '<td>'.$vr.'</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	echo '</tr>';
}
?>
</table>
<link rel="stylesheet" href="<?=base_url()?>assets/css/tweeter.css" type="text/css">
<div role="main" aria-labelledby="content-main-heading" class="content-main" id="timeline">
   <div class="content-header">
      <div class="header-inner">
         <h2 id="content-main-heading" class="js-timeline-title">Comunidad
         </h2>
      </div>
   </div>
   <div class="stream-container " data-max-id="99287136750153727" data-since-id="349998049189298176">
      <div class="stream profile-stream">
         <ol class="stream-items js-navigable-stream" id="stream-items-id">
            <li class="js-stream-item stream-item stream-item expanding-stream-item" data-item-id="349998049189298176" id="stream-item-tweet-349998049189298176" data-item-type="tweet">
               <div class="tweet original-tweet js-stream-tweet js-actionable-tweet js-profile-popup-actionable js-original-tweet  
                  " data-feedback-key="stream_status_349998049189298176" data-tweet-id="349998049189298176" data-item-id="349998049189298176" data-screen-name="Aleccitico" data-name="Alejandro Allende A" data-user-id="330854666" data-expanded-footer="&lt;div class=&quot;js-tweet-details-fixer tweet-details-fixer&quot;&gt;
                  &lt;div class=&quot;js-tweet-media-container &quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;entities-media-container &quot; style=&quot;min-height:0px&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;js-machine-translated-tweet-container&quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;js-tweet-stats-container tweet-stats-container &quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;client-and-actions&quot;&gt;
                  &lt;span class=&quot;metadata&quot;&gt;
                  &lt;span title=&quot;2:10 PM - 26 jun 13&quot;&gt;2:10 PM - 26 jun 13&lt;/span&gt;
                  &amp;middot; &lt;a class=&quot;permalink-link js-permalink js-nav&quot; href=&quot;/Aleccitico/status/349998049189298176&quot;  tabindex=&quot;-1&quot;&gt;Detalles&lt;/a&gt;
                  &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;/div&gt;
                  " data-mentions="ICONNutrition">
                  <span class="icon dogear"></span>
                  <div class="content">
                     <div class="stream-item-header">
                        <a class="account-group js-account-group js-action-profile js-user-profile-link js-nav" href="/Aleccitico" data-user-id="330854666">
                        <img class="avatar js-action-profile-avatar" src="https://si0.twimg.com/profile_images/1435743772/alerico_normal.jpg" alt="">
                        <strong class="fullname js-action-profile-name show-popup-with-id">Alejandro Allende A</strong>
                        <span>‏</span><span class="username js-action-profile-name"><s>@</s><b>Aleccitico</b></span>
                        </a>
                        <small class="time">
                        <a href="/Aleccitico/status/349998049189298176" class="tweet-timestamp js-permalink js-nav" title="2:10 PM - 26 jun 13"><span class="_timestamp js-short-timestamp " data-time="1372281012" data-long-form="true">26 jun</span></a>
                        </small>
                     </div>
                     <p class="js-tweet-text tweet-text">Training them wheels <a href="/ICONNutrition" class="twitter-atreply pretty-link" dir="ltr"><s>@</s><b>ICONNutrition</b></a></p>
                     <div class="stream-item-footer">
                        <div class="context"></div>
                        <a class="details with-icn js-details" href="/Aleccitico/status/349998049189298176">
                        <span class="details-icon js-icon-container">
                        </span>
                        <b>
                        <span class="expand-stream-item js-view-details">
                        <span class="expand-action-wrapper">
                        Abrir
                        </span>
                        </span>
                        <span class="collapse-stream-item js-hide-details">
                        Reducir
                        </span>
                        </b>
                        </a>
                     </div>
                     <div class="expanded-content js-tweet-details-dropdown">
                     </div>
                  </div>
               </div>
            </li>

            <li class="js-stream-item stream-item stream-item expanding-stream-item" data-item-id="349998049189298176" id="stream-item-tweet-349998049189298176" data-item-type="tweet">
               <div class="tweet original-tweet js-stream-tweet js-actionable-tweet js-profile-popup-actionable js-original-tweet  
                  " data-feedback-key="stream_status_349998049189298176" data-tweet-id="349998049189298176" data-item-id="349998049189298176" data-screen-name="Aleccitico" data-name="Alejandro Allende A" data-user-id="330854666" data-expanded-footer="&lt;div class=&quot;js-tweet-details-fixer tweet-details-fixer&quot;&gt;
                  &lt;div class=&quot;js-tweet-media-container &quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;entities-media-container &quot; style=&quot;min-height:0px&quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;js-machine-translated-tweet-container&quot;&gt;&lt;/div&gt;
                  &lt;div class=&quot;js-tweet-stats-container tweet-stats-container &quot;&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;client-and-actions&quot;&gt;
                  &lt;span class=&quot;metadata&quot;&gt;
                  &lt;span title=&quot;2:10 PM - 26 jun 13&quot;&gt;2:10 PM - 26 jun 13&lt;/span&gt;
                  &amp;middot; &lt;a class=&quot;permalink-link js-permalink js-nav&quot; href=&quot;/Aleccitico/status/349998049189298176&quot;  tabindex=&quot;-1&quot;&gt;Detalles&lt;/a&gt;
                  &lt;/span&gt;
                  &lt;/div&gt;
                  &lt;/div&gt;
                  " data-mentions="ICONNutrition" >
                  <span class="icon dogear"></span>
                  <div  class="content" style="margin-left:18%; width:82%;">
                     <div class="stream-item-header">
                        <a class="account-group js-account-group js-action-profile js-user-profile-link js-nav" href="/Aleccitico" data-user-id="330854666">
                        <img class="avatar js-action-profile-avatar" src="https://si0.twimg.com/profile_images/1435743772/alerico_normal.jpg" alt="">
                        <strong class="fullname js-action-profile-name show-popup-with-id">Alejandro Allende A</strong>
                        <span>‏</span><span class="username js-action-profile-name"><s>@</s><b>Aleccitico</b></span>
                        </a>
                        <small class="time">
                        <a href="/Aleccitico/status/349998049189298176" class="tweet-timestamp js-permalink js-nav" title="2:10 PM - 26 jun 13"><span class="_timestamp js-short-timestamp " data-time="1372281012" data-long-form="true">26 jun</span></a>
                        </small>
                     </div>
                     <p class="js-tweet-text tweet-text">Training them wheels <a href="/ICONNutrition" class="twitter-atreply pretty-link" dir="ltr"><s>@</s><b>ICONNutrition</b></a></p>
                     <div class="stream-item-footer">
                        <div class="context"></div>
                        <a class="details with-icn js-details" href="/Aleccitico/status/349998049189298176">
                        <span class="details-icon js-icon-container">
                        </span>
                        <b>
                        <span class="expand-stream-item js-view-details">
                        <span class="expand-action-wrapper">
                        Abrir
                        </span>
                        </span>
                        <span class="collapse-stream-item js-hide-details">
                        Reducir
                        </span>
                        </b>
                        </a>
                     </div>
                     <div class="expanded-content js-tweet-details-dropdown">
                     </div>
                  </div>
               </div>
            </li>
         </ol>
         <div class="stream-footer ">
               
               <div class="stream-loading">
                  <div class="stream-end-inner">
                  	<nav class="pagination">
      <a href="index.html" class="prev">&lt;</a>
      <a href="index.html">1</a>
      <a href="index.html">2</a>
      <a href="index.html">3</a>
      <span>4</span>
      <a href="index.html">5</a>
      <a href="index.html" class="next">&gt;</a>
    </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div><!-- /.last -->