<?php
function drawIcon($prmColor,$prmDelay){
$navy   = '#002664';
$white  = '#ffffff';
$black  = '#000000';

if ($prmColor == 'white') {
    $color = $white;
}elseif ($prmColor == 'black') {
  $color = $black;
}else {
  $color = $navy;
}


// $color  = ($prmColor == 'white') ? $white: ($prmColor == 'black') ? $black: $navy;
$delay  = ($prmDelay > 0) ? $prmDelay: 0;
echo '<div class="link_icon"' . ' data-delay="' . $delay . '"' .
'>
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="over">
    <g id="btn_round_navy" transform="translate(-133 -531)">
      <g id="circle" transform="translate(133 531)" fill="none" stroke="'. $color .'" stroke-width="1">
        <circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>
        <circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>
      </g>
      <path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(5347.452 -8994.423)" fill="none" stroke="'. $color .'" stroke-width="1" class="svg-elem-3"></path>
      <path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(5346.211 -8992.983)" fill="none" stroke="'. $color .'" stroke-width="1" class="svg-elem-4"></path>
    </g>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="base">
    <g id="btn_round_navy" transform="translate(-133 -531)">
      <g id="circle" transform="translate(133 531)" fill="none" stroke="'. $color .'" stroke-width="1">
        <circle cx="20" cy="20" r="20" stroke="none" class="svg-elem-1"></circle>
        <circle cx="20" cy="20" r="19.5" fill="none" class="svg-elem-2"></circle>
      </g>
      <path id="yoko" d="M-5199.842,9545.573h10.041" transform="translate(5347.452 -8994.423)" fill="none" stroke="'. $color .'" stroke-width="1" class="svg-elem-3"></path>
      <path id="arrow" d="M-5192.348,9541.014l3.884,3.093-3.884,3.462" transform="translate(5346.211 -8992.983)" fill="none" stroke="'. $color .'" stroke-width="1" class="svg-elem-4"></path>
    </g>
  </svg>
</div>
';
}

?>





