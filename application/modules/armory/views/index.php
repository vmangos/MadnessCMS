<link rel="stylesheet" href="<?= base_url().'application/modules/player/assets/css/player.css'; ?>" />  
  	<script> const whTooltips = {colorLinks: false, iconizeLinks: true, iconSize: 'large', renameLinks: false, dropchance: true}; </script>
	<script src="https://wow.zamimg.com/widgets/power.js"></script>
	<script data-ad-client="ca-pub-9864809161319056" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <style>
  .item {
	width:70px;
	height:70px;
}

.item a {
	background-image:url(<?= base_url().'application/modules/armory/assets/images/default/item_frame.png'?>);
	width:68px;
	height:68px;
	margin-top:-6px;
	margin-left:-6px;
	position:absolute;
	z-index:999;
	display:block;
}

#armory_top {
	padding:10px;
}

#armory_top img {
	float:left;
	display:block;
	width:64px;
	height:64px;
	margin-right:15px;
}

#armory_name {
	float:left;
	margin-top:-8px;
}

#armory_top h1 {
	margin:0px;
	padding:0px;
	font-size:40px;
	font-weight:normal;
	overflow:hidden;
	height:60px;
	width:400px;
}

#armory_top h1 a {
	font-size:18px;
}

#armory_top h2 {
	margin:0px;
	padding:0px;
	margin-top:-5px;
	font-size:16px;
	font-weight:normal;
}

#armory_top h2 i {
	opacity:0.7;
}

#armory_bars {
	float:right;
}

#armory_bars div {
	height:22px;
	width:170px;
	color:#fff;
	text-shadow:1px 1px 0px #1e1e1e;
	text-align:center;
	padding-top:8px;
	margin-bottom:10px;
	border-radius:2px;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	box-shadow:0px 1px 0px rgba(255,255,255,0.3) inset;
	-moz-box-shadow:0px 1px 0px rgba(255,255,255,0.3) inset;
	-webkit-box-shadow:0px 1px 0px rgba(255,255,255,0.3) inset;
}

#armory_health {
	background-image: linear-gradient(bottom, #2AA728 100%, #199517 0%);
	background-image: -o-linear-gradient(bottom, #2AA728 100%, #199517 0%);
	background-image: -moz-linear-gradient(bottom, #2AA728 100%, #199517 0%);
	background-image: -webkit-linear-gradient(bottom, #2AA728 100%, #199517 0%);
	background-image: -ms-linear-gradient(bottom, #2AA728 100%, #199517 0%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(1, #2AA728),
		color-stop(0, #199517));
	background-color:#199517;
	border:1px solid #22600c;
}

#armory_mana {
	background-image: linear-gradient(bottom, #2876a7 100%, #176595 0%);
	background-image: -o-linear-gradient(bottom, #2876a7 100%, #176595 0%);
	background-image: -moz-linear-gradient(bottom, #2876a7 100%, #176595 0%);
	background-image: -webkit-linear-gradient(bottom, #2876a7 100%, #176595 0%);
	background-image: -ms-linear-gradient(bottom, #2876a7 100%, #176595 0%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(1, #2876a7),
		color-stop(0, #176595)
	);
	background-color:#176595;
	border:1px solid #0c3e5d;
}

#armory_rage {
	background-image: linear-gradient(bottom, #a72828 100%, #951717 0%);
	background-image: -o-linear-gradient(bottom, #a72828 100%, #951717 0%);
	background-image: -moz-linear-gradient(bottom, #a72828 100%, #951717 0%);
	background-image: -webkit-linear-gradient(bottom, #a72828 100%, #951717 0%);
	background-image: -ms-linear-gradient(bottom, #a72828 100%, #951717 0%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(1, #a72828),
		color-stop(0, #951717)
	);
	background-color:#951717;
	border:1px solid #5d0c0c;
}

#armory_focus {
	background-image: linear-gradient(bottom, #863d14 0%, #a74b14 100%);
	background-image: -o-linear-gradient(bottom, #863d14 0%, #a74b14 100%);
	background-image: -moz-linear-gradient(bottom, #863d14 0%, #a74b14 100%);
	background-image: -webkit-linear-gradient(bottom, #863d14 0%, #a74b14 100%);
	background-image: -ms-linear-gradient(bottom, #863d14 0%, #a74b14 100%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, #863d14),
		color-stop(1, #a74b14)
	);
	background-color:#a74b14;
	border:1px solid #5d300c;
}

#armory_energy {
	background-image: linear-gradient(bottom, #a78828 100%, #957917 0%);
	background-image: -o-linear-gradient(bottom, #a78828 100%, #957917 0%);
	background-image: -moz-linear-gradient(bottom, #a78828 100%, #957917 0%);
	background-image: -webkit-linear-gradient(bottom, #a78828 100%, #957917 0%);
	background-image: -ms-linear-gradient(bottom, #a78828 100%, #957917 0%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(1, #a78828),
		color-stop(0, #957917)
	);
	background-color:#957917;
	border:1px solid #5d4b0c;
}

#armory_runic {
	background-image: linear-gradient(bottom, #28a3a7 100%, #179195 0%);
	background-image: -o-linear-gradient(bottom, #28a3a7 100%, #179195 0%);
	background-image: -moz-linear-gradient(bottom, #28a3a7 100%, #179195 0%);
	background-image: -webkit-linear-gradient(bottom, #28a3a7 100%, #179195 0%);
	background-image: -ms-linear-gradient(bottom, #28a3a7 100%, #179195 0%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(1, #28a3a7),
		color-stop(0, #179195)
	);
	background-color:#179195;
	border:1px solid #0c5d58;
}

#armory {
	width:698px;
	margin-left:auto;
	margin-right:auto;
	min-height:512px;
	background-position:top center;
	background-repeat:no-repeat;
}

#armory_stats {
	float:left;
	width:367px;
	height:232px;
	margin-left:58px;
	margin-top:145px;
	text-shadow:1px 1px 0px #000;
	overflow:hidden;
}

#armory_stats_top a {
	color:#ccc;
	font-size:14px;
	margin-right:20px;
	margin-left:20px;
}

#armory_stats a:hover {
	color:#fff;
}

.armory_current_tab {
	font-weight:bold;
	color:#fff !important;
}

#armory_stats section {
	display:none;
	color:#fff;
	margin-top:8px;
}

#armory_stats td {
	padding:7px;
	font-size:14px;
}

#armory_stats table {
	margin-left:auto;
	margin-right:auto;
}

#armory_stats_next a {
	border:1px solid #3a3a3a;
	background-image: linear-gradient(bottom, rgba(200,200,200,0.3) 0%, rgba(255,255,255,0.3) 100%);
	background-image: -o-linear-gradient(bottom, rgba(200,200,200,0.3) 0%, rgba(255,255,255,0.3) 100%);
	background-image: -moz-linear-gradient(bottom, rgba(200,200,200,0.3) 0%, rgba(255,255,255,0.3) 100%);
	background-image: -webkit-linear-gradient(bottom, rgba(200,200,200,0.3) 0%, rgba(255,255,255,0.3) 100%);
	background-image: -ms-linear-gradient(bottom, rgba(200,200,200,0.3) 0%, rgba(255,255,255,0.3) 100%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(1, rgba(255,255,255,0.3)),
		color-stop(0, rgba(200,200,200,0.3))
	);
	text-shadow:1px 1px 0px #000;
	box-shadow:0px 1px 0px #a2a2a2 inset;
	-webkit-box-shadow:0px 1px 0px #a2a2a2 inset;
	-moz-box-shadow:0px 1px 0px #a2a2a2 inset;
	color:#fff;

	width:80px;
	padding:3px;
	border-radius:5px;
	font-size:14px;
}

#armory_stats_next a:active {
	box-shadow:0px 0px 5px #151515 inset;
	-webkit-box-shadow:0px 0px 5px #151515 inset;
	-moz-box-shadow:0px 0px 5px #151515 inset;
	color:#c1c1c1;
}

#armory_stats_next {
	margin-top:10px;
}

#armory_stats td:first-child {
	color:#fff;
}

#armory_stats td:nth-child(2) {
	text-align:right;
}

#armory_left {
	float:left;
	margin-left:40px;
	margin-top:15px;
	width:68px;
}

#armory_right {
	float:left;
	margin-top:15px;
	margin-left:65px;
	width:70px;
}

#armory_bottom .item {
	float:left;
}

#armory_bottom {
	clear:both;
	margin-left:auto;
	margin-right:auto;
	width:222px;
	height:70px;
}

#tab_armory_1, #tab_armory_2, #tab_armory_3 {
	width:367px;
}
  </style>
  
  <section class="uk-section uk-section-xsmall uk-padding-remove slider-section">
      <div class="uk-background-cover uk-height-small header-section"></div>
    </section>
    <section class="uk-section uk-section-xsmall main-section" data-uk-height-viewport="expand: true">
      <div class="uk-container">
        <article class="uk-article" >
          <div class="uk-card uk-card-default uk-card-body uk-margin-small" >

						<?php foreach ($realms as $charsMultiRealm):
							$MultiRealm = $this->wowrealm->getRealmConnectionData($charsMultiRealm->id);
						?>
				<div class="uk-width-3-3@s">
						
					<?php foreach($this->armory_model->getPlayerInfo($MultiRealm, $id)->result() as $info): ?>
					<div class="uk-overflow-auto uk-margin-small">
					<table class="uk-table dark-table uk-table-divider uk-table-small">
						<thead>
							<tr>
								<th class="uk-table-expand uk-text-center"> Player Name</th>
								<th class="uk-table-expand uk-text-center"> Level</th>
								<th class="uk-table-expand uk-text-center"> Race</th>
								<th class="uk-table-expand uk-text-center"> Class</th>
							</tr>
						</thead>
						<tbody>	
							<tr>
								<td class="uk-text-center"><h2><?= $info->name ?></h2></td>
								<td class="uk-text-center"><h2><?= $info->level ?></h2></td>
								<td class="uk-text-center"><img align="center" src="<?= base_url('assets/images/races/'.$this->wowgeneral->getRaceIcon($info->race)); ?>" width="40" height="40" title="<?= $this->wowgeneral->getRaceName($info->race); ?>" alt="<?= $this->wowgeneral->getRaceName($info->race); ?>"></td>
								<td class="uk-text-center"><img align="center" src="<?= base_url('assets/images/class/'.$this->wowgeneral->getClassIcon($info->class)); ?>" width="40" height="40" title="<?= $this->wowgeneral->getClassName($info->class); ?>" alt="<?= $this->wowgeneral->getClassName($info->class); ?>"></td>
							</tr>
						</tbody>
					</table>
					</div>
					
				</div>	
				<div class="uk-overflow-auto uk-margin-small">
				<section id="armory"style="background-image: url(<?= base_url().'application/modules/armory/assets/images/'?><?= $info->race ?>.png);">
				

					<section id="armory_left">
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvHead($MultiRealm, $id)->result() as $head): ?><?= $head->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvNeck($MultiRealm, $id)->result() as $neck): ?><?= $neck->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvShoulders($MultiRealm, $id)->result() as $shoulders): ?><?= $shoulders->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvBack($MultiRealm, $id)->result() as $back): ?><?= $back->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvChest($MultiRealm, $id)->result() as $chest): ?><?= $chest->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvBody($MultiRealm, $id)->result() as $body): ?><?= $body->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvTabard($MultiRealm, $id)->result() as $tabard): ?><?= $tabard->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvWrists($MultiRealm, $id)->result() as $wrist): ?><?= $wrist->item_id ?><?php endforeach ?>" target="_blank"></a></div>
					</section>
					<section id="armory_stats">
					<center id="armory_stats_top">
					<b>Player Stats</b>
					</center>
					<section id="tab_stats" style="display:block;">
						<div style="width:1200px;height:194px;" id="attributes_wrapper">
							<div id="tab_armory_1" style="float:left;">
								<table width="367px" cellspacing="0" cellpadding="0">
									<tr>
										<td width="50%">Name</td>
										<td><?= $info->name ?></td>
									</tr>
									<tr>
										<td width="50%">Online</td>
										<td><?= $info->online ?></td>
									</tr>
									<tr>
										<td width="50%">Honor Points</td>
										<td><?= $info->honor_last_week_cp ?></td>
									</tr>
									<tr>
										<td width="50%">Last Week Kills</td>
										<td><?= $info->honor_last_week_hk ?></td>
									</tr>
									<tr>
										<td width="50%">Total Kills</td>
										<td><?= $info->honor_stored_hk ?></td>
									</tr>

					</table>

					
				</div>
				</div>
					</section>
					</section>
					<section id="armory_right">
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvHands($MultiRealm, $id)->result() as $hands): ?><?= $hands->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvWaist($MultiRealm, $id)->result() as $waist): ?><?= $waist->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvLegs($MultiRealm, $id)->result() as $legs): ?><?= $legs->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvFeet($MultiRealm, $id)->result() as $feet): ?><?= $feet->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvFingerOne($MultiRealm, $id)->result() as $fingerone): ?><?= $fingerone->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvFingerTwo($MultiRealm, $id)->result() as $fingertwo): ?><?= $fingertwo->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvTrinketOne($MultiRealm, $id)->result() as $trinketone): ?><?= $trinketone->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvTrinketTwo($MultiRealm, $id)->result() as $trinkettwo): ?><?= $trinkettwo->item_id ?><?php endforeach ?>" target="_blank"></a></div>
					</section>

					<section id="armory_bottom">
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvMainHand($MultiRealm, $id)->result() as $mainhand): ?><?= $mainhand->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvOffHand($MultiRealm, $id)->result() as $offhand): ?><?= $offhand->item_id ?><?php endforeach ?>" target="_blank"></a></div>
						<div class="item"><a href="https://classic.wowhead.com/item=<?php foreach($this->armory_model->getCharInvRanged($MultiRealm, $id)->result() as $ranged): ?><?= $ranged->item_id ?><?php endforeach ?>" target="_blank"></a></div>
					</section>
				</section>
				</div>
				<?php endforeach; ?>
				<?php endforeach; ?>
          </div>
        </article>
      </div>
	<a href="https://www.zuldazar-realms.tk"style="display:inline;"></a>
	<a href="https://www.asmodeosnetworkco.tk/"style="display:inline;"></a>
    </section>
