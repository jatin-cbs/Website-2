<?php
$PAGE_TITLE    = "KXStudio : Documentation";
$PAGE_TYPE     = "KXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation");
$PAGE_SOURCE_2 = ARRAY("Documentation");
include_once("includes/header.php");
?>

<p>
    If you're looking for help regarding an Ubuntu feature, please search within the
      <a href="http://ubuntuforums.org/" class="external text" rel="nofollow">Ubuntu Forums</a>.<br/>
    You can also use IRC, channel #kxstudio, server irc.freenode.net (or irc.freenode.com).
</p>
<p>
    Please note that documentation for KXStudio is a work in progress, if you need some information not available here, you can try:
</p>
<ul>
    <li><a href="http://www.wiki.linuxmusicians.com/doku.php" class="external text" rel="nofollow">LinuxMusicians Wiki</a></li>
    <li><a href="https://help.ubuntu.com/community/UbuntuStudio/HowTos" class="external text" rel="nofollow">UbuntuStudio Community Documentation</a></li>
</ul>

<!-- TOPICS -->
<p>
    <br/>
    Some useful topics:
</p>

<!-- KXSTUDIO RELEASE -->
<p>
    <b>KXStudio 12.04.3 Release</b>
</p>
<ul>
    <li><a href="<?php echo $ROOT; ?>/Documentation:KXStudio12043:ReleaseNotes">Release Notes</a></li>
</ul>

<!-- KXSTUDIO DISTRIBUTION -->
<p>
    <br/>
    <b>KXStudio Distribution &amp; Repositories</b>
</p>
<ul>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Ubuntu:Meta-Packages">Available Meta-Packages</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Ubuntu:RegisterCommercial">Register/Activate your purchased software</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Ubuntu:Upgrade">Upgrade from an existing Ubuntu installation</a></li>
</ul>

<!-- KXSTUDIO MANUAL -->
<p>
    <br/>
    <b>KXStudio Manual</b>
</p>
<ul>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:kxstudio_introduction">Introduction</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:kxstudio_and_free_software">KXStudio and Free Software</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:downloading_and_booting_kxstudio">Downloading, booting and running KXStudio 'live'</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:installing_kxstudio">Installing KXStudio</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:package_management">Package Management</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:video_drivers">Installing non-free video drivers</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:included_and_recommended_apps">Included and recommended apps</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:linux_audio_overview">Linux Audio Overview</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:alsa_and_kxstudio">ALSA and KXStudio</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:cadence_introduction">An introduction to Cadence</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:jack_configuration">JACK Configuration</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:simple_claudia_studio">Creating a simple LADISH studio using Claudia</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:latency">Latency compensation and xrun reduction tips</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:wineasio_and_reaper">WineASIO and REAPER</a></li>
    <li><a href="<?php echo $ROOT; ?>/Documentation:Manual:useful_links_and_getting_help">Useful Links And Getting Help</a></li>
</ul>
<p>
    (The manual is being written by Dan MacDonald with the assistance of Aaron Wolf, falkTX and the LinuxMusicians community).
</p>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>