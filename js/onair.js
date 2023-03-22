if (
  navigator.userAgent.match(/iPhone/i) ||
  navigator.userAgent.match(/iPod/i) ||
  navigator.userAgent.match(/iPad/i)
) {
  html5PlayerIOS(
    'https://statslive2.infomaniak.ch/playlist/radiosalam/radiosalam-128.mp3/playlist.m3u',
    270
  );
} else if (isOtherMobile() && !swfobject.hasFlashPlayerVersion('10.0.0')) {
  html5Player(
    '',
    'http://radiosalam.ice.infomaniak.ch/radiosalam-128.mp3',
    270
  );
} else {
  var paramsPlayerld = {
    menu: 'false',
    AllowScriptAccess: 'always',
    wmode: 'transparent',
    scale: 'noscale',
    salign: 'lt',
    bgcolor: '#ffffff',
    quality: 'high',
    allowfullscreen: 'true',
  };
  if (!swfobject.hasFlashPlayerVersion('10.0.0')) {
    document.getElementById('radioPlayer').innerHTML =
      "Vous devez mettre &agrave; jour gratuitement votre version de flash player pour ecouter cette radio en <a href='http://get.adobe.com/fr/flashplayer/' target='_blank'>cliquant ici !</a>";
    html5Player(
      '',
      'http://radiosalam.ice.infomaniak.ch/radiosalam-128.mp3',
      270
    );
  }
  try {
    swfobject.embedSWF(
      com_adswizz_synchro_decorateUrl(
        location.protocol +
          '//static.infomaniak.ch/infomaniak/radio/flash/player.v3.swf?3'
      ),
      'radioPlayer',
      '270',
      '100',
      '10.0.0',
      '',
      {
        sLive:
          'https://static.infomaniak.ch/infomaniak/radio/xml/radiosalam.xml',
        sProto: location.protocol,
        sNavigator: navigator.sayswho,
      },
      paramsPlayerld,
      { id: 'flashPlayer', name: 'flashPlayer' }
    );
  } catch (e) {}
}
