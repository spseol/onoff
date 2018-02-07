<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.6.0
*/error_reporting(6135);$Vc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Vc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$ui=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($ui)$$X=$ui;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1Èä·ã`Â8(áÕ3M¨ó\"Ç39é?Ee=Ò¬ü~ù¾²ôÅîÓ¸7;ÉCÄÁ›ÍE\rd!)Âa*¯5ajo\0ª#`Ê38¶\0Êí]“eŒêˆÆ2¤	mk×øe]…Á­AZsÕStZ•Z!)BR¨G+Î#Jv2(ã öîc…4<¸#sB¯0éú‚6YL\r²=£…¿[×73Æğ<Ô:£Šbx”ßJ=	m_ ¾ÏÅfªlÙ×t‹åIªƒHÚ3x*€›á6`t6¾Ã%UÔLòeÙ‚˜<´\0ÉAQ<P<:š#u/¤:T\\> Ë-…xJˆÍQH\nj¡L+jİzğó°7£•«`İğ³\nkƒƒ'“NÓvX>îC-TË©¶œ¸†4*L”%Cj>7ß¨ŠŞ¨¨è-ƒÈà2‡¹pÂ3Œ¢îb–àÙ¥°¨çŞv>ñœp\\²ŒÃê6_HˆÛ»CxïW†1OjùAwH7q£ \\É#¨ÒÉ®ırŒ4v=ŸnòvÑO‰–÷6‡gWpß×ù'eÚy¯—Ÿİ÷¡pî0#z6=ÙÖ€u¡º\\_Ä.¬â£>H<rŞ+cz%}®w÷ÈVˆA*€¸Ã—B>dR:\rê‰\rœğl\rÕ9´jğ43•¸qm\rPN	ğØAãş`ÅûÁµxoÃ¨m\rÁì8?ÔüÃõ,	E·,UèŒ‚âêìòŸ%z®Ê›¬5õ’ˆvÃìvE 86H0[C¼Lmj¨2D¨¢¦Á`pŠÑ1?ÁRÀQÊÛMæÅxšbéu±Å&˜âI-\"¡Ê§ÛV\"òÍpG\"W†±è\$¦Š“J\$6†PæPÜÄu\"ˆT7CHòÖ–{÷‘²=Ë†UªŸtuIYxµ¢6–#èrpbMÉı’å\\ˆÑ7VRÒØÜo\":\$bCA¸F!Ñ\$—–	E0f\0F€krÊ)“0`b*4‚Kç¾ˆêR\\…„`k7¦ô„Àº]–`×(\$ôä7DHÊDè%	ç\\çO³ÂsNÕÜ°å*V’ ŸÈØê]	âŞÊs§C1p¼ÕvjÂÉªM€aº†# µØQQ¢(ÌR|Ë“õfÔmhšW\$Ÿš3H:%„Ò•êh\\V‘\$7‡_Ê:Î¡iı@¨4OK)p:¦¾™@2äC»(ÎEgö`C\"\$üÔ¤¼“JÑ2±\$9‡4dÊµA â”PQb.iõb´´Èñ)TÁX/A„¾@:ÌT[­íf¸œ	®©)ãGP`Ú–D“t(c¡Èú6w\0ÎË˜p²? tƒHx2‡ò¦úZŠ6aèÈ¢ê÷\r§Û<cÏ-+#÷Mk‚u†/F·¢„L–¥@ÒF’û­€oäY}D(‰,‘¼-1–YúwìWéªw·Ê\$ƒ´á›œB´BÂ‚9E,¥Ë-w4®C6,¡’p–…I‚Ò¤®¼\\hŞí•:ĞUıŞ™€€8ÀF¢Öu“½jåF*£½ªRç¬öûX¬OÀcÂERÿÎˆ&`_AsTu0çÂL(!ˆ{1áÈ3‡gNÚÜÂ„ ë;ı€\$ti‹ößÄµ6ñ%{uÜ\"¡lñ~Ë\n§Úpva]§‰`eºH¢\"¾lmZ,z“*DÒáD‚54®/ñ¼pÆçC8‰gÖy!³åB5Ö´ÀIå¦W‡èÖü†*Àr¢¸ÊÛFkŸ}â†Éd]Ğú•¢ÉRafæ¢y˜¹‘ŒZ;Ù‘½ç½¨•¢Ö˜AÇ˜è9d™“]Ó	² xr§,º£¨ +ò©T¡ù­fõ\0sœ¥3(†à[vÁ³î¹YŠ³6OAØ-pÁè›duNK2N6R1²ë³J:—Ú/T–ğG®ÑLW˜ÁV1ÒƒÒó\r49ic¼‰A’.±V0¬¸m‘°õEä¹úç]†xdãÙ“\rËoY\\Ç¡0¥‡d»âæfKÊW•m«E6µ‘½Ü\nöW´­2C:–qÙ»‡Æ€ïfÊ„AĞ6\0Ğ†4Ò*­¹nøDWËoë¿å’}>Án¯#ñˆç\\´JÙ;¯náã½¬«•s»«p®#èÍ7I¨T'úo-É§õn\\\\ÒYKv½JÙ8Ó–ºg6ç`;.œóîŞ<·Ú'²}9ÌÛ¿CW–G÷®û¢í\\µÒ»çÆù_?~=¾ª¾ÂÔûÖ^&ŸŸv»¾z“êî]UD„	w7ñ7å¤Àû‚††Y)r[mƒ pX)`»¾Y?Ö5—Ì: 9§¶\rK}n<Ô8°eµÔû6ŸòYƒ†¿zfêRñt2ókûfwíá¶@û~³Şäí“·ßÈüN»¯mïUù?ìöìõ÷ßãïáô>ùã(M¯á5Ê/Ê_«À„%şÛ¬(üÏŒÁ\r~ùêûOŞû°‰¶SiÜ·0 PH©æJëj‹pLDşƒh6Å‚—Â¶B	År€Úâ\r¨06£n®0Yğ_pT FõCp-Ğ[Àà\r\0àç´pwğ{ğWcq ¿Pp¨7	cE	œp€I\$-ú‰0]	0}\nP”4@ïĞ|ê…i|I\0``f”Šùà\rà`˜PKÆx ß\nPí\0ê\rğ¡ğ¶°”¤y\nE7ğš« Øñ\nQQ…±«À¿1Q_I|’lUPyq\n™À`)„ºÿ	Pìàì)°ÅñRèPÿP)­fÕ‚êÕĞç¥y°ëqcÑ;([qƒñf*š‘Há	°”yXC\r¯¢³ÔA*ä€I^O`ÏIƒÙÈ9âÒ‘'qÁÀÆ‘ñ‰ñËñ\r‘ÃqÇÑß Ø°F€Q£\rĞŞÀ‹M€¾ƒqÓ ±ëÑÃ‘åÉÇ!±á òÑÃ¥’E5‰ñ\r±®i…\$)•Cq¤\0Û1¸¢÷0›²O%1=’\$ÅÒ_q¿&ñÌ@`è±1®,—\"\"‘Íru1ò—ÇEü„°Lüò”±r›ğ¦àÖ ó\nPŸ*æÏ	²‡ò·+Ú7?*2˜tp›	ã&f	}%²©	Q,q±ã²ã‘=ññ,åÑÑ/`¿/©Ó‘….°éààòï0ÑÏ1pó1±‹(Ó\r©«Òÿ.‘Vó12“\"35ÀÆYÓ7ò¿23I4Óñû#ğŞSe P^]ó;6ĞšÎÂe	³?Su#,©¯ê)0ÿ4©{#éŸ\$ppÈrX®’]l‡	® «±£±òH(Ó57q_Fª“ÓÁÓÈp½1“¿\nSzôp¥5sÉ†])¬A:	ªäÀ  Ø«s4#ÓÑ?³55±†*ÓîÒhÜ‘p›”!´Ô@ßAóCSË44Bó#àe:	|8B8©|,&ò‘çä²à@è	Ğlœ‹E@¦Ã‰È®@R6s’6Ì010š±OzGÃBï@î«DCàÜ8bëÃDƒ'DÂ?Eú\$X,´\\•N»F1´f/4k\$‹øé");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n8œÅ3)°Ë7œ…†81ĞÊx:\nOg#)Ğêr7\n\"†è´`ø|2ÌgSi–H)N¦S‘ä§\r‡\"0¹Ä@ä)Ÿ`(\$s6O!ÓèœV/=Œ' T4æ=„˜iS˜6IO“ÊerÙxî9*Åº°ºn3\rÑ‰vƒCÁ`õšİ2G%¨YãæáşŸ1™Ífô¹ÑÈ‚l¤Ã1‘\ny£*pC\r\$ÌnTª•3=\\‚r9O\"ã	Ààl<Š\rÇ\\€³I,—s\nA¤Æeh+Mâ‹!q0™ıf»`(¹N{c–—+wËñÁY£–pÙ§3Š3ú˜+I¦Ôj¹ºıÏk·²n¸qÜƒzi#^rØÀº´‹3èâÏ[èºo;®Ë(‹Ğ6#ÀÒ\":cz>ß£C2vÑCXÊ<P˜Ãc*5\nº¨è·/üP97ñ|F»°c0ƒ³¨°ä!ƒæ…!¨œƒ!‰Ã\nZ%ÃÄ‡#CHÌ!¨Òr8ç\$¥¡ì¯,ÈRÜ”2…Èã^0·á@¤2Œâ(ğ88P/‚à¸İ„á\\Á\$La\\å;càH„áHX„•\nÊƒtœ‡á8A<ÏsZô*ƒ;IĞÎ3¡Á@Ò2<Š¢¬!A8G<Ôj¿-Kƒ({*\r’Åa1‡¡èN4Tc\"\\Ò!=1^•ğİM9O³:†;jŒŠ\rãXÒàL#HÎ7ƒ#Tİª/-´‹£pÊ;B Â‹\n¿2!ƒ¥Ít]apÎİî\0RÛCËv¬MÂI,\rö§\0Hv°İ?kTŞ4£Š¼óuÙ±Ø;&’ò+&ƒ›ğ•µ\rÈXbu4İ¡i88Â2Bä/âƒ–4ƒ¡€N8AÜA)52íúøËåÎ2ˆ¨sã8ç“5¤¥¡pçWC@è:˜t…ã¾´Öešh\"#8_˜æcp^ãˆâI]OHşÔ:zdÈ3g£(„ˆ×Ã–k¸î“\\6´˜2ÚÚ–÷¹iÃä7²˜Ï]\rÃxO¾nºpè<¡ÁpïQ®UĞn‹ò|@çËó#G3ğÁ8bA¨Ê6ô2Ÿ67%#¸\\8\rıš2Èc\ræİŸk®‚.(’	’-—J;î›Ñó ÈéLãÏ ƒ¼Wâøã§“Ñ¥É¤â–÷·nû Ò§»æıMÎÀ9ZĞs]êz®¯¬ëy^[¯ì4-ºU\0ta ¶62^•˜.`¤‚â.Cßjÿ[á„ % Q\0`dëM8¿¦¼ËÛ\$O0`4²êÎ\n\0a\rA„<†@Ÿƒ›Š\r!À:ØBAŸ9Ù?h>¤Çº š~ÌŒ—6ÈˆhÜ=Ë-œA7XäÀÖ‡\\¼\r‘Q<èš§q’'!XÎ“2úT °!ŒD\r§Ò,K´\"ç%˜HÖqR\r„Ì ¢îC =í‚ æäÈ<c”\n#<€5Mø êEƒœyŒ¡”“‡°úo\"°cJKL2ù&£ØeRœÀWĞAÎTwÊÑ‘;åJˆâá\\`)5¦ÔŞœBòqhT3§àR	¸'\r+\":‚8¤ÀtV“Aß+]ŒÉS72Èğ¤YˆFƒ¼Z85àc,æô¶JÁ±/+S¸nBpoWÅdÖ\"§Qû¦a­ZKpèŞ§y\$›’ĞÏõ4I¢@L'@‰xCÑdfé~}Q*”ÒºAµàQ’\"BÛ*2\0œ.ÑÕkF©\"\r”‘° Øoƒ\\ëÔ¢™ÚVijY¦¥MÊôO‚\$Šˆ2ÒThH´¤ª0XHª5~kL©‰…T*:~P©”2¦tÒÂàB\0ıY…ÀÈÁœŸj†u¤×º…P¥*xª•b¤o“õÿ¢PÜ\$¹W/“*¿Éz';¦Ñ\$*ùÛØébâmíÃƒÄ'`\rÑn%ÅÄ47Wëí—’àöÑ ¶K´´³@<ÅgæÃ¨bBÑÿZ·¦Ô|€VdR£¿6leQÌ`(Ô¢,Ñd˜å¹8\r¥]S:?š1¹`îÉY@`ÜAåÊ“%¾ÎYëA”sMš*Ñ×È{P¯\n*w–ÓÓŠ>íÕÍ½ôDÏû‹>ï%Ë½·át*“Ã-÷Ÿ“úÜØ+pœoùfìüÜ”ªyCM•Á.òÍåwŸ`/NiÔİß;r\nº‚“AŞM,'y¯r·% ¦3%PV¨(rføıİD>yCS{\r@òİ»7…ÃUŸEsæãcĞ¶©Àfa,†˜·LòXtÉ±nş_ĞJ©¢µäÎÊîªÁZ­tRˆ[¨–eöËiV{ ë‰Ed´½2ŞùÛ«¯]Z1W£Ônè:û¥ƒ•“ÂVía[ºr{¼\rúñİ«Ûz.E&½—Ÿ:ªFMœ%ŸSk'JæÒ„Ò;¯u#S5Kçİ»Õ¬“‚„İ²ó†,œ—¢O¬µ¢;] ¸éT kHezÏ\0÷YK\$[4µ\rs‡'	ÌèEÆ5ÏE%9Ï7Y\r·!ğ0‡ËJÚ;R%w/\nº¾aˆ7‡‡ürŠëİº†}¥Šm-6Ie§Z§3¬Àú©Ò½±óÈ2×°B•HÜuS|“å¦2ƒ2ÊQh2W½÷LCŞd¾ƒ«]:•È7¤ÔçUÓÀûš®6l¨#ñ<ËÅiöòÒ~o˜Ğ”Á\rÍÎ|\$´âƒ¹aøsW˜:´Fğ@!å¸\n@~—¦4‚]¼êägM0¬ú/ıg¥0§ù3®˜BÂ›¬^Ò;+7àT\r(|'\\ÙÑå¾n8ô¤…Ë¸Ş€ĞESİpÓe».>ÂÖwDZwÙm'½µîÕŞ•sÔÕä™çp[¹—£Ùz÷/ºw”_‹JemWˆW( “Ú_×(¶Õ\$TUÇ ÄĞƒ^ñõ…Ã©‡(ùpwşh¡ïÔ_#OfÁ©5.¦ÔV¥S2ê¨Šæ‹×È-ñçbá6²™p+!¯s.	P&„Åt	ƒpbaÀ¹?rC8ÊµBkî}ï¡ió‘WÁAÜ†“_¸*÷_f*vâ8Â\n æ\n`ÒIïZoôÓ@úY/ôÓÂ3Eææ€P\r8ÀYDTõMI œ4'/x%EÎ/@]ÀÊÀ{@ÌQ4İ bR MFÙ|¢è%0SDr§ÂÈ f(\"*@-ˆ#­ŒÖPŠù­®?%Û¯Æ(¦x\0Âl\0ÌÅÚ	V€W\nàß%Ú\nç8\r\0}\nï¬à±B;€È.Bè¤Vò',z&Àf Ì\r`WPcL\0üÌ­ ’åÒkšz2\rğñ@îW@Â’ç%\n~1€‚X ¤Ö\nD”!©Aâ*‡¤²{ <E¦ÉğÒWÌî ä Ñ\n…æHÜÑX‹1`à±6Éñ]êxÈÜÀÌ`æo,Æîø²¨îğMÑ1’Ñï«Î½*¸«Ã€à¶ Z@º€¶¬ÀVå€L%5\np‘HâWÀğonVì‹1Ğ³†ÖŠĞ+¬»KL.ğ¯/ñœWóæšLÄ‚«ñ¯1·­3f–ñM(ÅEdS/\"\npÜådİJ*İİ«Ñí*­úà¯Î÷r¼èô&eurâRL’^=h®áàQ‘\$ân*hèÀòv¢BæÇØæÀ\\F\n‚WÅr f\$ò…(	(àac¤¥¢'H•ñ\n¯€YÏ„ÒrF€Ñ+¨¨Ò¹²Sk›&,”âN£Ò\"ñØÊÂ(`Ú\rÀšCB\$R\$–ğ¦\rÑàòúÆo#®öD±3RüĞÑöÑ(,òæ%†ÌÄ‡F!sÅlL)¬#Rû2Å*V-Ôq“ O2õ3Æ\$å2¿Š}'\0Ë*‹Åjú®ÅRrZ] [*r¼SE_4„»\"„@z`í/ó|°ó	îÿ7Ñôğ7 ÒÀ{8ÏµM –s|â,˜â…PDÈîŒ‰R§-3ªÉÅHW.võóVö\$rµEs8Ó\r5;îâ‰Q%KÒ_“—:'<Jsâà^ÈœU ¶½ H Dhô D¬9b`CÂV!Cæç¥”÷Q\$×©ş)2€çƒ¤±Bòy)H~%¤+'“²àè~G²yMŠBÍ}t4-2„EeDÜiàÆh¬ü\$‘\$İ€È2y'ĞŠ‰,jbJÇº\nbtNàFB;	 é	b;	ª÷IÈğ\rP\r\0¨)íÄEtXêtXÔ°èT¶#\rÄçí¬`‡Bğšé–Dr‹#2‘F…ÿ)’Œ c)ç	ô­:èÜÜ¸hM¼í,YÔÂIâ>§ˆ-Hbtd´¬¹Ê6u ÌR§c**ÏwQêPiËb¶nMSBU\0ŠxY2F‰šì2H§Ôx0)C\$AJÔ¡JTZÙH,TTÕM’NˆğèD¤è¤G;5#_S¯ìô÷:#ÃO«	UTùV\0NäŸ\n€ÖreÚ\n€Ò%¤4šR­KÍR\0Úš%b‚’Ÿ+&\$ìqÔ~ÖEÕkMõY) z€aWR‡Nè`q;4,T0}l	\\tVØô¨Ğ¥ïiC”í#5ìR%Ä#\ràX@N\0pa'SM‡Qòc%éc‚àµ*0\r‘	í¤ ÀR\$åh¶Gb€Î¬YXí¢Û6YMÉØ¢“Ä²	ş@Êş†4şö@±Ë 6igIÚëÖzà–~à–…]gÓJÖ‘Pª=AîMTˆ™M9W‰'‰ËUuÚõŞcË!ƒºÚ–µBTïmU/‚ÊïƒÓû1Ü´kš¦© j» ±ªÉ_!“fP¶LŒó¸ŒÄP¯B³ŞZÀ¨µ²2¢WÌ”\\M,µb#q× ñ7#âó2àš…¸ğw8’åä# ‚’’æR‚`Zp\0ğ»‚åËV#€Û@Ëuiÿu¥Ğ÷avWh\rs·6 ¢üÕ0D­­tà÷ŠÒ<…sŸz.qwQt7FJ³€|f·¦ éw‰+uÄãx(YxfozÅ­{·¾.K€ ËJØàt´©>gL\r€àHs?Ì¬e¤\0Ÿyä&3±LâIn3ír†²Ïc2ñbvóğáê÷Èİ-‚s-É“À*41˜8 x=RDÊ5Ğ;R[n…çnÑAqF\\QJíifí­¦Å”™.ÏYk’lÁñïÏóÚÃ\r\"Óç\"oÍ†Õ’ò.Ü·*¶Š²fâ’k‹ë—èñº“Ñ\$…HX…Ö\0\"jlDĞ\re²\\àÂ‡È·æ–â8&LJVm^vÀ°ûª”j„×GFåÄ\\˜î	˜òö&s'€Q \\\"òb€°	àÄ\rBsÉw‘‚	‘Ù!’BN š7ÇC.ˆÙû`¨\n\nRG‡H-9\rÃËŒ\0ñIÏ\0”UY`tyff–JxÛ#ö…ybB¢<“/Ö&¶û¥t“|0¤µ@™z^`DÈFw˜Ü¤ü€_7Ù¤ya–Y‡2äøK¹»˜P	œ,L’MªˆXÊÚPğ}S\0÷œysœÅbeu…zWõMˆğ\rè¬\$3½E\"\n\0\n`©bÀºPÆ@ù¨&™ı|™\nÄ§egÄê‚+âH·°™(ªÕN À^\0Zk@îªP¦@%Â(WÊ\$2¹XÄº(¹ı¢æòN °º*|\0È°Év¥”gë§«h>z& Æ…G¹p\"ÈòDø2ÄJzftj¸ebm˜VÃ ¼H¼z«WyÈ7h5Œ¸Ï&ºm•µ.÷Yç˜½œ¹ŠYûÚÑ¢z›\0€¬*¸üb!”Ê…1™S—™„Ã@‚hq`åš\$ó0òkÇv|¹¬ù±›J­ÚÇÅq™¿3¦ı*¿ŸEŠ%Ùß4è’@ZìŠúBºd™ºÃ‹úÜ#ª”©˜Äú”^\rÀC–f’­¬)n‚`{‘@”\n`	À¸;†±¦d8ôa§q/ÀË¯ğxÔxNDó¹gy¹ºü)éŒSX„D\$F¯À¢ öø{dFÒB¤lF+€šò´<Ù€Ê><J?™©4„’õ·¸Ô ¶.Ìğ*õ6¹Lÿ»®ú»ÛxxØbÖµ\nöJëÒœ¤®¶ësrä¦÷\0Ù HàÓ2MV²1;\$¯,¨éBUJ¨ÓÂÏV¢8ƒRz`Ş‹`¶OìŒ”J3ÃmÃ×!e øãJ#)O£RfJ‚goK%¥àÊ\n ¤	*‚\r»š7)¦Îdümš\\àœ•É€ßÉÇ°¨vTÛ3°”ÈİpéÆú€uÄ)7‡Kƒ·Üˆ\r@ŞBdâÖ<<¦A\$KMàÀ^ÿ@éÃ\\9¾LùD@ĞUÎfAvü\nÀà\\RQj¨_Ô_›÷\"–ÛB[pduª[y¼{`øˆ;˜ï—X­:i¹šû¹âù¹LsÜ}Y'\n¥çP€¾˜€P°|fì¿–úÆ®uÌ¸Ïy‹óR¨JæÆD)àXâ¦\rĞUñ:÷õ_Kö	”–5ÿ`,ôµ:!„.Pí¾Ü&„P½¸í”Y\n6Ôá\\Lv]›%’3¢hš]˜\$Z£Ët8€èâã®kê)î¦,\0ø¬\"¼}ôQÏ©‡oÁ…şqSV\"Ôphã\0R=É5v,´·‹{`ÜF}ª2µ	°9C.m·ä&xnmk•åN%r@oÂ‚èu|>`}ÔPèàLÙô×`›z`„`ä@ÃbóëëßÏ³˜ÏÚ¾3¥7IôKÈ~53ú	ğÄ#´™,®§Ûóã?Dz\$ıúÄ‚1£g–½èÆ]¯÷?q‘L‡7\rè	tbäoøÃëêt70İ\0b€XROÀàİÔ«Õ*û\"®.â•=\r]†Ì­Ø»ğ‚¯1ğ€{ğ–¹ët€ê\0`&l\$ë™fDT“Ú<‰S\\Û;ÕBhî/XáªWhİ h`¥ƒ‡æÿw@¨\rïèBugáê^7 °‡Çİî¢H.Çn_+÷@È£^7Æ‡T›÷f)÷¾&›bŸÛßs? e|€ŠvŸ~¨`Oü`ÉûGiqn(ŸêEçü#ˆîOìŞ‘™)ëø¨v’iè…Úı )«€HuˆáLLW¢Õ¨9TGÍË\\FVÜ!èm#*ˆ„'—*ŠùÊîMryPŞ¾*×)åä.›e[©¬êfç7A‰+ŒzÃušù§½¥u€ùÅDrzÌ=a,°2#Ä\rüqRÕ¾´ Ì²èPÙ„ıFÉ^ßbÂPã¾½?©Í}Z`’ WÚ„Yöëu~ø¼ß°4AÚ	Å©á©a1Œ€XÒÕ¥•= +?ÔEØFã“0ÀLxÊÒîÀ¼¶`,CĞÊİÊóÈII C„\0}ƒöuIˆ.„:™¹‡ûŸz£Ó^Ğ\\²®.äb‹æ]ğÊP\\LÃ¶İ˜@»¦`GfWPŠ«‚ Xß4'‰EüĞ«'E5EÂA®OIsvP€™|íäT\rsSÄUÀ1UkL\"ØÚ“ÚÈ=Ú	1]Âî’hA@ ³É\nğŒAsâJ¾çÂ˜×H\$Tr·Ã/í\nîÿzL!)²àøæÊHhÈ€£U\$@qh€¢‘¡ğĞ}4\0wĞ93<’…04E±0íOo Â\0.2€]fƒ·ˆuÍŞ „àVIp\0ÄCn‰²TÌ4(’|´';;yœ3A±,GGã§\"#2ÙÀu²‘K0*\$‹\0¤¸.Å‰¼\0¢tˆÒ'È„<ú\0^ãÙ›xpóq¡³Z¾bX /zAû(ñœ ZQCÀ)ÔE¥o‚ƒÈSÑîÅd’â‡TD‹JóğÃÅn1dU\n„\nûû0¤v€DAZ#ÀØk8A0e{‹ÀT\n#ñ-.\0B‡\\¤_‹h2%·ÅÉ½±ozO\0(½’/„K\r¤`\") é60¡û‹ùBcXÆEö3¨>2²åc5¨¿ÄàşÇÎY:˜”²×õ.Ÿ¥in¬ÀĞ–¸qÕp@<-!îc¾ùÇĞ¤I…'(üL†ƒÀÄÑ9+w!ªI×\nZµa\nê0ªÆyÌGH&@=%¼Â!iOà·íÅx¨bEs°^€XŸÀ28'çª¼zGº=ñå„Ğ¦Qö\rÌ~Âhö„=èTˆMtDÆµŸ¢>£S@#ÔM áâ;í#å!‰Eˆ¯Š×VÈU¶&©ÊCA•uú\$˜fTRœ ÏÎz)PÃ±)0áÔX\0@Œ%&.„h¨ğ‘˜DŒØ\"	Èììò=X£œ˜f\"HèÍÒ<3¾W4W¥I<Í‹nèŒÁ\$¦®4‘Ï¢0NÌ’›Ò³A“!è\\R;/l—ä¢-a¢É|‰/ÿˆ”Q¢,5!ZI@Jh‚‚Å²Ì<€×J®*¬b¢Å&.É~\$Ty¬¡8¤5×±©v+ë1úñSXÄ-YKÂ”iŒÔÂ–QàJ\nQ¦é ğ¥á€úSGƒºª¡kA•–L€êE=SªÔ²§WÁd _XPÆX\0‰ZBAxè‰œ*pEí‡	 \"Ğÿ€ˆv2ª“ë€÷%Vïˆ™Õã àˆ\0ŞÉËM`Ó ²FÂ\0©kªKæéLïV*©p½)’2j‚;%Ã&iwˆÀ§\rF¨²©{´_@qbC%î0 \\pfÉ‚a/GÅËüröHneü 9€¾`²«\"BzGdòsXFØèCÉxè·%b€@¶V‚•´¶T³1É[Õâ¼‰ÜjK2‡fêçv˜iXzñsq‹f\n¡ep!„‡|œv\$&4ÃbwK«\0[tÉ“3‰{%ºÆdêùœBgæ5 ´Ó“4I6ÄR(ñIŠY4¦¬D”­Ä¥´DãŸ€ÚÃÌõˆŠ›pDMH,SDhŠà\\%Èm¨}Š>x¸¡­Å#\0PÆğKG	\0È`y?Ik\\àéåâËÉÀf„‡7à94ÄŞ\"çK\næÂŞ×aÎOÀŒ°U˜zM\0007Š|ÁS:…tÏ\"6àS¿¸Q¬HpYNBj¸#l\r,\nğ¨\0Ë´ËJu’ˆŒ'Ãx[Ñš8EÀMèwYâÃèÔkëŠ|@1%İ\0€e\"»E=	ã–‘Vï<v¸”ç¡<¤%àk{(×\$G%Ê’=àbŸÆ§Æ‡Bô‡ı,„›aXƒ§°ŸÆ²{\nJ&U6­	]«PüËy.|aJy@Eg©}\"„ŸÚÀ=ö	 }éQŸ‰ºW&‚±¯Z~o§ „òçÅ>@»Pv|4¡ù×)A™ú…ód\"Û…ìWÒ”BÅ‘ÈÅfÅÓÃ£½‡¯mÔsNôœF\"–Iƒì³Ç€á`€@0H&•LçI\\-¼SrÖ¡´Û²f%ÈÉì=FJ6ü°œqoÒIÖä€šº…^yÓ§FB/è‡r7\"È1†(Rb\\èäF2M‘Œ\$ )0IÂA2-.`\\éH23D‰¤!!-ÚGp¹ŠlÀ[!!	€º'æ€()fWë#IPº‰ù@å,ÙåŞ“„\\×É™Ò\0Bğ&\$	`Eà€ŠĞ°,B‰€(h)xùÒÆ–qÜ#Ñ×‚¦º°%>\\€%+Q\r“İ/0ª\0l	9¥ÑEU­ÌX’|qBcèÒ@ …”†Á	Dö®äÀgáoINÒ¨€€¶á\n (Ä! 8|\$p{\"ì€ø2×°˜ô»Kš¡iïFJg£´*„z¤€)\$SJPR^f l¤Ñói¬2j4%øis\\åÉNâÚJSÀ¦éL²€8Xo4¥İ9ÎªÊiÒ ‘”«£J¡E£FU¶'˜)è}MAÀá¤{Ê”â&¦ò_‡Ø˜ˆš•'3¨ËY\0÷SwˆäY\"Ñ\n\nJxŞ@¤€œr5K½/\0×R €„î\n3hIp#ÌåA*9uâ+èhˆø¡2`Qƒl¤(òú ağÄò*jÒt@\0+¬\0*X01S1ÄÒJ|è\0«Q‰^Õ„Táø‰ş4øT`f)CZn\$“3x\0000 úCÓ§ ÅcBèË@Ò~~qŒği’2*Ù5x`-½…64VF‚†e›@Ÿ@O>5È(*Œ\r\0;2F	réÉ@‚£'ø‡HÌö¹“@H@Z²[ÓpàxÈNBWlÑî\"85#OUé‹­Ob¹®Ú{@Z!àV½Uğ® EŠqªÒ*´ÌğNÉã…t›:K½İ•:OC´âQ:Ôd´•“¤ú`VşL–¦\0†ò5@çÓØls5¤åˆ	CóèÇ†b9K@a50\0æH+İaê‹Xè˜L,!\r¢½\\ªèš»Xj¨®<«…BiW0:ÕÔ3¡MK ¶&¸¡)×ğ]qäœ˜í+ú+ 4€îÁ„I<¥tì¦ˆeÈAA„ép²•ukœ‹¸.P¤ êê­j%@È‰p;·Ê,Å}¯7ª¬ÀYØõè¤Dù(ÀºJ‡øQ–èÇ¶I*ÚÖ^Ğ¥Õ¡ÅH'är)13±yÛ Ã›IÁùÒ'E*M¦j—ú.ÚzÂá¥~q`íCi©#Î¢Åa¥£|Ò€d!YM*Öt@@ZR]ã/¬Ïí^^tt1L¥4}°QÔ¥Pî9I6µu²‘äÄT<2O6®è]¦Ô]‰¥Q¾[³S›‰Ô†T‰\0/ˆMâñ§ĞãımD”l xµí©@uwÛ §4¶å¼Û:·×ÅjÖÖ¸¤¹\0YkÄÆ£r—‹ÏŠª')àĞø„¢6¥İ¬­º^¥C[ºİ/§t¥À@¶Q!~1±1xîoc©zâEî·…6NO50ÿ´ôÖlukçğpTP· jšÚ\0è\$„E¹Vš¶€í–\"k5’œù±b_GrÀ¸\\¹ğ<.rÖ+hæ|\0œfÁf5…[Hi¥µ›úµjë€šá4[8&µhšEe'€ÛBÂ.P\"lóäµ¢5€¼ÊK×šßÔO.¢+.dX¤5CTb‰4Ikû‹i`é¸ÆA¼ù¨\$ëUh{“ºÊÜÛt…Ñ.êì#Ó˜ˆ-&Äêá^	—gIÏß¶F\n,tDÈÄ¦u1”˜ÜÕŞw8(ÕÎÀî-‘†5æõçî€³ \\ÆóĞ²½»oesà§ŞÚô!p/Eğoy|03ŞæõFCS¸(¡ú¸”å‡w^Â¹.·ZÕìVÀŸË›Dğˆ ifiZ\$Ğ 0øı[°VùàIÛ£Ë‡ìQó¿×9À7¼®ätÅLïË0ßÍG%¦pa¹Ek`bô‰økÃ®ULz°©ğL		­@ÜúrÕì'dÃPcÀV\0ó€ë:¦—Æ	pK`ÜEc;¢8£p<.ÜÍ'KV«Ö(rga¤!±9Q°FZá]|‚rtw7,\0×às¸ÕÂÔD|”I@psáxë6[ù7Ï [¸Ü_ë”Ä¼dãu87õÿ©JãTlq‚A>cP¡!”¢¿e+ğ%@› mÀøF\\2çÒV‚6¸\0Ã@F4-r@ašRh!¶pÖ,|6˜hÃ`[ğÖhüAõì)-ˆC®J!ÀSøÃš0½‡À–à À_~ºñ#ìBa©Ÿxˆ¥~Ypäà”\r	7\rÀÓÊ¯ÿ„0â®Ÿ(ÿ°Ï“ibfô¯­61j#•ş¯ıIyobºkX8éAßixƒŒKX0Â@cƒa3OmÃE†ü\nŠ;¸›ŠÅûº–{æ2iÔ#XÚÌ˜/|úÌ­Æòƒ‹,ÊúïÚ]Üàdóšğë‚’ic™q	.½¥ò1Ş#&µŒµÀ[fÇ8Ô.“¸Û8-›–+7U OØäL5€L[ñ”Å­Ü‘®ÚL–w€‰ñ€\"˜=¾\n¾)œ”€Ÿ%•#èPõWş1ZÍ™6C£Úï~;Ä\\\\C“È¶O‹n=Y¹aCÙ3k.›\0»5Wáp”\\\rÀÛ²ã mç×¾rx«­šìİÙëˆõqîŞê‰dpšY#ÖM*Q, \0®˜µ¤|aZİ’Ôj: ù1É–^ğl˜Š%€+Ë‚*Ñ8‡QÌå(%„ÊXäÑx\\Å«(YLK•F@¦è8šVÉ‰1j_ÊÃ/Ù±¥H¬eÓ­¯™Q¿å,¿Lf3\"ıáŠÉ ]>0°ÚiYjòôfãcĞŒ¹îàhfTÎÈğûÛ\$qaÎFŒ¾RB”‡\n¡º)bHUKT\\Ë¢a\$`,C–TC¹@½	U—/Œ¶wÖ¤âYD4àRšÊX´\"¥®a¿j`åŠŒj¡Ğ¦‹•t\nI›\\U«?¡zÏN%€øsœ‘ºÌv¼Í^L¿`ã€¶z\0m+4! BÜ…,\0Æb\$´.k¥Aqğl2“Š\$_y†,°8sÊé“ôZqOE—†L²s{f1k2ybêV#[s¡ƒYºì3ıOÛT4{i”Qh•†·a¾/FdÑpÕjµMhçFôsaK(ÒË¥!Eq#•öÅĞQ\"ØP]p>èÎğ&ÚCü1E†+\$ØÊÕKæ‘1¤K4\"ÇH÷–Ñ\$‹…}‚mé7Mz*¢Õô¤Í*_¾IØFN–4Çpú†¦[K™.F®&¤o£…!Á@ÒÍ±’á¦Š–ÙÌ?b\r\"e¶¦1‰G¢u½òòá¢FñˆŞHb8‘Èù\$\\M%N”ÓPtôØ`­7C‹lW¾3Cµ©jTĞ\$3N2TxÊú^«·÷QDÄ+ğÓ¥8’°ø¶‘)3¥SNÎLDé1‰úƒi•X‰T[ú—}Â¨Ü×E8Üû®‹X*DXÈp5àZŠ‹9œzĞr)Ğªõ#Ü]ª‚g’Õv_éè´†u@\"c®UíÕ¬Á€¯_lsr´kU=XÎÍÚÊAÄ#•„NPËP¡9aNaÊh’ÚE]·`îŒ>Â’1°Óƒ'L±â'8—\rG’;€¤İ \"H€ˆP,\0ˆx2Kn™‚.ÂA×0Ï¥tã	5<„m\$ËO¸0ªŠy½%H¿e	/Ò…íM¥<Í¥×\\ÚŒ£vªK@G}H.¥Â]Û[:5(ø´„êÓSZ·ŞÑ;´dué£ey–y˜¬‹—ë);µæ¨NÍ›gÙQVª‰Ù‰nzhë]3U‡˜Ô«é	«4…íÎóqØ\\…GÒ6nÒÚÀæİN”ÓN¸‘L‰Ã·4ÇFÚp†>â¶÷µ;4™Yw¢Ÿ(Ny&&»NÜ¥\r(üƒêPù»¿œ{¥\$€anDÖçÜıQyâó1–Ã‰R¨]äï,&”¤·Q„êúš-zÒLêØh÷‰Xªd=ô¥ßcY::Ü¡5’96ƒBŸ·ªgüWz¢ğd.@*@€A @@ğ# ùUè¯¥¿ÀXš·7´†#¦ôƒ=e«Ä‡æÌ Ò…Á@49”‡îBJQĞæ.}‘#® ïÃ	#NËšØÄ-¡tcÖá´ß“¡&-=UJ-\0ÊÇ^½wPö˜\\…ÎnšParÄ·qÑgÂ×â\0¶<`/| é¡ÇäĞ -À¿\0Ú¤Äã0õ85¸=2–rÑ®¨7ğloíµ=äåÍ-7I<°ÆÔüÒ•õ7Ö¥P\0¨Ôš' ^b.}NqyÅZ)”HSz_Jp*:ÊÖØ…qPNDIp‚±Y˜MhXTãI£áİ>PòHw<”Mÿ%ìà.€ë“áI\n”Ğ++š“g,Bè@zF’Æ¼8…i\0¼p]È¤\nÕ®İ(ÉRó¤¼İ<sÇÒÑÏyÊĞ½À\rsuù/I`ñ#<°åO¹¤Şi\0ÄOÃ¯Ÿ,Øä¢7íx	Ë*ŞOÚ9Şhò·›c°Rg4ŸÌ®f†üœÒo3Âêj'-ü<ÖBï6º.uówŸAˆ	 M¹ÂhqÛœ·…ç99ÒtN€\0Ÿ›‘¿âø‹…G&–\ry–¥§\$²…ñÌCò×mîwIysN]åØPè`	5n'îFÖù ®ROGù:^~SpÏ	œMU{@Ó^btå÷½;â¿/únSa'7 {\\D7O™ñÌğÿhK†™Kè'8'Ğ„àŞÃ¦€72EÏÌ±')I 1ê\$Ğ õSŸœFƒÊ@WÍ’¸ôO­W…ROWâ2ĞètÌd]>ë;:*NOÊôÂ9áóXíÍ~iu£°¹ˆ']zkÑ.vN\\b\\6àj^\0Êı% Ï@}…âçÓA¢ÜòO±z/È>‹¶dò	‡şâüHáG^TşÖÑ§|Kx]»ÄÏÈÊúÑ’°‰¹4-À9İF¯À+€Ÿ…0¾xQ=¿’ıµ@T§—Î%<ıĞ|àŸİÜ¯‰”¨Wií&ååInç÷Gº]ÔÓA‚åg%ÀqËyäMeç‡ÎÙ’d3²ˆØ•¨¦¥j‚”óbdøA]ÛqÚKØ˜^åÓ ØÊH<2à/÷Ì£@V0«œG\" ÆHÚğ†À	\"×¹×F%Œ®èĞ.È\0†Gv;¬	J,R¢Xß¡¼e°	yd•qĞ©]ŒŸ\rË“†à<‰ºV¨¯\n´¤¾ğÎC1’)¬dÂé®o†ÊäŞëG[o4›ßr|3¡Acr8#S·Íd7uÉ8Ô!¹[&èÁ\nÈ'ç\"÷‹üğÏc'AL\0C,†9ËgPÀWåµê4\0¡ñ8ü¬¿ä5•\$tãRĞ’˜zr880@:òO¡ı’¸½ür~IëY\r|ã\\åa‡Dó¸NK4tO=ŒhWÀ?ôo³†¯?ÃĞ(mC/¡U¿Óœæ€¾HŞ‘|dƒµâËH}C>A\")uüqáÂ\\×İ.ÕRšP58„©È}‹¤iõàÉ|`À8½íóšÆw³ñ™<üf±6>G6üô+šı€\0");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌĞ==˜ÎFS	ĞÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xğ¸?Ä'ƒi°SANN‘ùğxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\n?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYÌèy6GFmY8o7\n\r³0¤÷\0DbcÓ!¾Q7Ğ¨d8‹Áì~‘¬N)ùEĞ³`ôNsßğ`ÆS)ĞOé—·ç/º<xÆ9o»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êİê{n7ÀÃ¡ƒAğNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sğ\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+äÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XĞ]µİY XÁeåzWâü 7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Ş3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ğ`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆŞ±ÅáĞİã&/¦O‚ğL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ğÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Şír_sËP‡hà¼àĞ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàıUş„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšğÜlAüV…¨4 hà£Sq<à@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒĞÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯İ¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ĞÒ\nÁX; ‹ìêCaA¬\ráİñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\rP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëĞæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gğÒö]«ÜyRÔ7\"ğæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!İf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ıøæ8PE5-	Ğ_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²İ‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âĞiTğ1ªORäl«,5[İ˜\$¹·)¬ôjLÆU`£SË`Z^ğ|€‡r½=Ğ÷nç™»–˜TU	1Hyk›Çt+\0váD¿\r	<œàÆ™ìñjG”­tÆ*3%k›YÜ²T*İ|\"CŠülhE§(È\rÃ8r‡×{Üñ0å²×şÙDÜ_Œ‡.6Ğ¸è;ãü‡„rBjƒO'Ûœ¥¥Ï>\$¤Ô`^6™Ì9‘#¸¨§æ4Xş¥mh8:êûc‹ş0ø×;Ø/Ô‰·¿¹Ø;ä\\'( î„tú'+™òı¯Ì·°^]­±NÑv¹ç#Ç,ëvğ×ÃOÏiÏ–©>·Ş<SïA\\€\\îµü!Ø3*tl`÷u\0p'è7…Pà9·bsœ{Àv®{·ü7ˆ\"{ÛÆrîaÖ(¿^æ¼İE÷úÿë¹gÒÜ/¡øUÄ9g¶î÷/ÈÔ`Ä\nL\n)À†‚(Aúağ\" çØ	Á&„PøÂ@O\nå¸«0†(M&©FJ'Ú! …0Š<ïHëîÂçÆù¥*Ì|ìÆ*çOZím*n/bî/ö®Ôˆ¹.ìâ©o\0ÎÊdnÎ)ùi:RÎëP2êmµ\0/vìOX÷ğøFÊ³ÏˆîŒè®\"ñ®êöî¸÷0õ0ö‚¬©í0bËĞgjğğ\$ñné0}°	î@ø=MÆ‚0nîPŸ/pæotì€÷°¨ğ.ÌÌ½g\0Ğ)o—\n0È÷‰\rF¶é€ b¾i¶Ão}\n°Ì¯…	NQ°'ğxòFaĞJîÎôLõéğĞàÆ\rÀÍ\r€Öö‘0Åñ'ğ¬Éd	oepİ°4DĞÜÊ¦q(~ÀÌ ê\r‚E°ÛprùQVFHœl£‚Kj¦¿äN&­j!ÍH`‚_bh\r1 ºn!ÍÉ­z™°¡ğ¥Í\\«¬\rŠíŠÃ`V_kÚÃ\"\\×‚'Vˆ«\0Ê¾`ACúÀ±Ï…¦VÆ`\r%¢’ÂÅì¦\rñâƒ‚k@NÀ°üBñíš™¯ ·!È\n’\0Z™6°\$d Œ,%à%laíH×\n‹#¢S\$!\$@¶İ2±„I\$r€{!±°J‡2HàZM\\ÉÇhb,‡'||cj~gĞr…`¼Ä¼º\$ºÄÂ+êA1ğœE€ÇÀÙ <ÊL¨Ñ\$âY%-FDªŠd€Lç„³ ª\n@’bVfè¾;2_(ëôLÄĞ¿Â²<%@Úœ,\"êdÄÀN‚erô\0æƒ`Ä¤Z€¾4Å'ld9-ò#`äóÅ–…à¶Öãj6ëÆ£ãv ¶àNÕÍf Ö@Ü†“&’B\$å¶(ğZ&„ßó278I à¿àP\rk\\§—2`¶\rdLb@Eöƒ2`P( B'ã€¶€º0²& ô{Â•“§:®ªdBå1ò^Ø‰*\r\0c<K|İ5sZ¾`ºÀÀO3ê5=@å5ÀC>@ÂW*	=\0N<g¿6s67Sm7u?	{<&LÂ.3~DÄê\rÅš¯x¹í),rîinÅ/ åO\0o{0kÎ]3>m‹”1\0”I@Ô9T34+Ô™@e”GFMCÉ\rE3ËEtm!Û#1ÁD @‚H(‘Ón ÃÆ<g,V`R]@úÂÇÉ3Cr7s~ÅGIói@\0vÂÓ5\rVß'¬ ¤ Î£PÀÔ\râ\$<bĞ%(‡Ddƒ‹PWÄîĞÌbØfO æx\0è} Üâ”lb &‰vj4µLS¼¨Ö´Ô¶5&dsF Mó4ÌÓ\".HËM0ó1uL³\"ÂÂ/J`ò{Çş§€ÊxÇYu*\"U.I53Q­3Qô»J„”g ’5…sàú&jÑŒ’Õu‚Ù­ĞªGQMTmGBƒtl-cù*±ş\rŠ«Z7Ôõó*hs/RUV·ğôªBŸNËˆ¸ÃóãêÔŠài¨Lk÷.©´Ätì é¾©…rYi”Õé-Sµƒ3Í\\šTëOM^­G>‘ZQjÔ‡™\"¤¬i”ÖMsSãS\$Ib	f²âÑuæ¦´™å:êSB|i¢ YÂ¦ƒà8	vÊ#é”Dª4`‡†.€Ë^óHÅM‰_Õ¼ŠuÀ™UÊz`ZJ	eçºİ@Ceíëa‰\"mób„6Ô¯JRÂÖ‘T?Ô£XMZÜÍĞ†ÍòpèÒ¶ªQv¯jÿjV¶{¶¼ÅCœ\rµÕ7‰TÊª úí5{Pö¿]’\rÓ?QàAAÀè‹’Í2ñ¾ “V)Ji£Ü-N99f–l JmÍò;u¨@‚<FşÑ ¾e†j€ÒÄ¦I‰<+CW@ğçÀ¿Z‘lÑ1É<2ÅiFı7`KG˜~L&+NàYtWHé£‘w	Ö•ƒòl€Òs'gÉãq+Lézbiz«ÆÊÅ¢Ğ.ĞŠÇzW²Ç ùzd•W¦Û÷¹(y)vİE4,\0Ô\"d¢¤\$Bã{²!)1U†5bp#Å}m=×È@ˆwÄ	P\0ä\rì¢·‘€`O|ëÆö	œÉüÅõûYôæJÕ‚öE×ÙOu_§\n`F`È}MÂ.#1á‚¬fì*´Õ¡µ§  ¿zàucû€—³ xfÓ8kZR¯s2Ê‚-†’§Z2­+Ê·¯(åsUõcDòÑ·Êì˜İX!àÍuø&-vPĞØ±\0'LïŒX øLÃ¹Œˆo	İô>¸ÕÓ\r@ÙPõ\rxF×üE€ÌÈ­ï%Àãì®ü=5NÖœƒ¸?„7ùNËÃ…©wŠ`ØhX«98 Ìø¯q¬£zãÏd%6Ì‚tÍ/…•˜ä¬ëLúÍl¾Ê,ÜKa•N~ÏÀÛìú,ÿ'íÇ€M\rf9£w˜!x÷x[ˆÏ‘ØG’8;„xA˜ù-IÌ&5\$–D\$ö¼³%…ØxÑ¬Á”ÈÂ´ÀÂŒ]›¤õ‡&o‰-39ÖLù½zü§y6¹;u¹zZ èÑ8ÿ_•Éx\0D?šX7†™«’y±OY.#3Ÿ8 ™Ç€˜e”Q¨=Ø€*˜™GŒwm ³Ú„Y‘ù ÀÚ]YOY¨F¨íšÙ)„z#\$eŠš)†/Œz?£z;™—Ù¬^ÛúFÒZg¤ù• Ì÷¥™§ƒš`^Úe¡­¦º#§“Øñ”©ú?œ¸e£€M£Ú3uÌåƒ0¹>Ê\"?Ÿö@×—Xv•\"ç”Œ¹¬¦*Ô¢\r6v~‡ÃOV~&×¨^gü šÄ‘Ù‡'Î€f6:-Z~¹šO6;zx²;&!Û+{9M³Ù³d¬ \r,9Öí°ä·WÂÆİ­:ê\rúÙœùã@ç‚+¢·]œÌ-[g™Û‡[s¶[iÙiÈq››y›éxé+“|7Í{7Ë|w³}„¢›£E–ûW°€Wk¸|JØ¶å‰xmˆ¸q xwyjŸ»˜#³˜e¼ø(²©‰¸ÀßÃ¾™†ò³ {èßÚ y“ »M»¸´@«æÉ‚“°Y(gÍš-ÿ©º©äí¡š¡ØJ(¥ü@ó…;…yÂ#S¼‡µY„Èp@Ï%èsúoŸ9;°ê¿ôõ¤¹+¯Ú	¥;«ÁúˆZNÙ¯Âº§„š k¼V§·u‰[ñ¼x…|q’¤ON?€ÉÕ	…`uœ¡6|­|X¹¤­—Ø³|Oìx!ë:¨œÏ—Y]–¬¹™c•¬À\r¹hÍ9nÎÁ¬¬ë€Ï8'—ù‚êà Æ\rS.1¿¢USÈ¸…¼X‰É+ËÉz]ÉµÊ¤?œ©ÊÀCË\r×Ë\\º­¹ø\$Ï`ùÌ)UÌ|Ë¤|Ñ¨x'ÕœØÌäÊ<àÌ™eÎ|êÍ³ç—â’Ìé—LïÏİMÎy€(Û§ĞlĞº¤O]{Ñ¾×FD®ÕÙ}¡yu‹ÑÄ’ß,XL\\ÆxÆÈ;U×ÉWt€vŸÄ\\OxWJ9È’×R5·WiMi[‡Kˆ€f(\0æ¾dÄšÒè¿©´\rìMÄáÈÙ7¿;ÈÃÆóÒñçÓ6‰KÊ¦Iª\rÄÜÃxv\r²V3ÕÛßÉ±.ÌàRùÂşÉá|Ÿá¾^2‰^0ß¾\$ QÍä[ã¿D÷áÜ£å>1'^X~t1\"6Lş›+ş¾Aàeá“æŞåI‘ç~Ÿåâ³â³@ßÕ­õpM>Óm<´ÒSKÊç-HÉÀ¼T76ÙSMfg¨=»ÅGPÊ°›PÖ\r¸é>Íö¾¡¥2Sb\$•C[Ø×ï(Ä)Ş%Q#G`uğ°ÇGwp\rkŞKe—zhjÓ“zi(ôèrO«óÄŞÓşØT=·7³òî~ÿ4\"ef›~íd™ôíVÿZ‰š÷U•-ëb'VµJ¹Z7ÛöÂ)T‘£8.<¿RMÿ\$‰ôÛØ'ßbyï\n5øƒİõ_àwñÎ°íUğ’`eiŞ¿J”b©gğuSÍë?Íå`öáì+¾Ïï Mïgè7`ùïí\0¢_Ô-ûŸõ_÷–?õF°\0“õ¸X‚å´’[²¯Jœ8&~D#Áö{P•Øô4Ü—½ù\"›\0ÌÀ€‹ı§ı@Ò“–¥\0F ?* ^ñï¹å¯wëĞ:ğ¾uàÏ3xKÍ^ów“¼¨ß¯‰y[Ô(æ–µ#¦/zr_”g·æ?¾\0?€1wMR&M¿†ù?¬St€T]İ´Gõ:I·à¢÷ˆ)‡©Bïˆ‹ vô§’½1ç<ôtÈâ6½:W{ÀŠôx:=Èî‘ƒŒŞšóø:Â!!\0x›Õ˜£÷q&áè0}z\"]ÄŞo•z¥™ÒjÃw×ßÊÚÁ6¸ÒJ¢PÛ[\\ }ûª`S™\0à¤qHMë/7B’€P°ÂÄ]FTã•8S5±/IÑ\rŒ\n îO¯0aQ\n >Ã2­j…;=Ú¬ÛdA=­p£VL)Xõ\nÂ¦`e\$˜TÆ¦QJÍó®ælJïŠÔîÑy„IŞ	ä:ƒÑÄÄBùbPÀ†ûZÍ¸n«ª°ÕU;>_Ñ\n	¾õëĞÌ`–ÔuMòŒ‚‚ÂÖm³ÕóÂLwúB\0\\b8¢MÜ[z‘&©1ı\0ô	¡\r˜TÖ×› €+\\»3ÀPlb4-)%Wd#\nÈårŞåMX\"Ï¡ä(Ei11(b`@fÒ´­ƒSÒóˆjåD†bf£}€rï¾‘ıD‘R1…´bÓ˜AÛïIy\"µWvàÁgC¸IÄJ8z\"P\\i¥\\m~ZR¹¢vî1ZB5IŠÃi@x”†·°-‰uM\njKÕU°h\$o—ˆJÏ¤!ÈL\"#p7\0´ P€\0ŠD÷\$	 GK4eÔĞ\$\nGä?ù3£EAJF4àIp\0«×F4±²<f@ %q¸<kãw€	àLOp\0‰xÓÇ(	€G>ğ@¡ØçÆÆ9\0TÀˆ˜ìGB7 - €øâG:<Q™ #Ã¨ÓÇ´û1Ï&tz£á0*J=à'‹J>ØßÇ8q¡Ğ¥ªà	€OÀ¢XôF´àQ,ÀÊĞ\"9‘®pä*ğ66A'ı,y€IF€Rˆ³TˆÏı\"”÷HÀR‚!´j#kyFÀ™àe‘¬z£ëéÈğG\0p£‰aJ`C÷iù@œT÷|\n€Ix£K\"­´*¨Tk\$c³òÆ”aAh€“! \"úE\0OdÄSxò\0T	ö\0‚à!FÜ\n’U“|™#S&		IvL\"”“…ä\$hĞÈŞEAïN\$—%%ù/\nP†1š“²{¤ï) <‡ğ L å-R1¤â6‘¶’<@O*\0J@q¹‘Ôª#É@Çµ0\$tƒ|’]ã`»¡ÄŠA]èÍìPá‘€˜CÀp\\pÒ¤\0™ÒÅ7°ÄÖ@9©bmˆr¶oÛC+Ù]¥JrÔfü¶\rì)d¤’Ñœ­^hßI\\Î. g–Ê>¥Í×8ŒŞÀ'–HÀf™rJÒ[rçoã¥¯.¹v„½ï#„#yR·+©yËÖ^òù›†F\0á±™]!É•ÒŞ”++Ù_Ë,©\0<@€M-¤2WòâÙR,c•Œœe2Ä*@\0êP €Âc°a0Ç\\PÁŠˆO ø`I_2Qs\$´w£¿=:Îz\0)Ì`ÌhŠÂ–Áƒˆç¢\nJ@@Ê«–\0šø 6qT¯å‡4J%•N-ºm¤Äåã.É‹%*cnäËNç6\"\rÍ‘¸òè—ûŠfÒAµÁ„põMÛ€I7\0™MÈ>lO›4ÅS	7™cÍì€\"ìß§\0å“6îps…–Äİåy.´ã	ò¦ñRKğ•PAo1FÂtIÄb*ÉÁ<‡©ı@¾7ĞË‚p,ï0NÅ÷: ¨N²m ,xO%è!‚Úv³¨˜ gz(ĞM´óÀIÃà	à~yËö›h\0U:éØOZyA8<2§²ğ¸ÊusŞ~lòÆÎEğ˜O”0±Ÿ0]'…>¡İÉŒ:ÜêÅ;°/€ÂwÒôäì'~3GÎ–~Ó­äş§c.	ş„òvT\0cØt'Ó;P²\$À\$ø€‚Ğ-‚s³òe|º!•@dĞObwÓæc¢õ'Ó@`P\"xôµèÀ0O™5´/|ãU{:b©R\"û0…Ñˆk˜Ğâ`BD\nk€Pãc©á4ä^ p6S`Ü\$ëf;Î7µ?lsÅÀß†gDÊ'4Xja	A‡…E%™	86b¡:qr\r±]C8ÊcÀF\n'ÑŒf_9Ã%(¦š*”~ŠãiSèÛÉ@(85 T”Ë[ş†JÚ4I…l=°QÜ\$dÀ®hä@D	-Ù!ü_]ÉÚH–ÆŠ”k6:·Úò\\M-ÌØğò£\r‘FJ>\n.‘”qeGú5QZ´†‹' É¢½Û0ŸîzP–à#Å¤øöÖéràÒít½’ÒÏËşŠ<QˆT¸£3D\\¹„ÄÓpOE¦%)77–Wt[ºô@¼›š\$F)½5qG0«-ÑW´v¢`è°*)RrÕ¨=9qE*K\$g	‚íA!åPjBT:—Kû§!×÷H“ R0?„6¤yA)B@:Q„8B+J5U]`„Ò¬€:£ğå*%Ip9ŒÌ€ÿ`KcQúQ.B”±Ltbª–yJñEê›Té¥õ7•ÎöAmÓä¢•Ku:ğSji— 5.q%LiFºšTr¦Ài©ÕKˆÒ¨z—55T%U•‰UÚIÕ‚¦µÕY\"\nSÕm†ÑÄx¨½Ch÷NZ¶UZ”Ä( Bêô\$YËV²ã€u@è”»’¯¢ª|	‚\$\0ÿ\0 oZw2Ò€x2‘ûk\$Á*I6IÒn• •¡ƒI,€ÆQU4ü\n„¢).øQôÖaIá]™À èLâh\"øf¢ÓŠ>˜:Z¥>L¡`n˜Ø¶Õì7”VLZu”…e¨ëXúè†ºB¿¬¥B‰º’¡Z`;®ø•J‡]òÑ€äS8¼«f \nÚ¶ˆ#\$ùjM(¹‘Ş¡”„¬a­Gí§Ì+Aı!èxL/\0)	Cö\nñW@é4€ºáÛ©• ŠÔRZƒ®â =˜Çî8“`²8~â†hÀìP °\r–	°ìD-FyX°+Êf°QSj+Xó|•È9-’øs¬xØü†ê+‰VÉcbpì¿”o6HĞq °³ªÈ@.€˜l 8g½YMŸÖWMPÀªU¡·YLß3PaèH2Ğ9©„:¶a²`¬Æd\0à&ê²YìŞY0Ù˜¡¶SŒ-—’%;/‡TİBS³PÔ%fØÚı• @ßFí¬(´Ö*Ñq +[ƒZ:ÒQY\0Ş´ëJUYÖ“/ı¦†pkzÈˆò€,´ğª‡ƒjÚê€¥W°×´e©JµFèıVBIµ\r£ÆpF›NÙ‚Ö¶™*Õ¨Í3kÚ0§D€{™Ôø`q™•Ò²Bqµe¥D‰cÚÚÔVÃE©‚¬nñ×äFG E›>jîèĞú0g´a|¡Shì7uÂİ„\$•†ì;aô—7&¡ë°R[WX„ÊØ(qÖ#Œ¬P¹Æä×–İc8!°H¸àØVX§Ä­jøÊZô‘¡¥°Q,DUaQ±X0‘ÕÕ¨ÀİËGbÁÜlŠBŠt9-oZü”L÷£¥Â­åpË‡‘x6&¯¯MyÔÏsÒ¿–èğ\"ÕÍ€èR‚IWU`c÷°à}l<|Â~Äw\"·ğvI%r+‹Rà¶\n\\ØùÃÑ][‹Ñ6&Á¸İÈ­Ãa”ÓºìÅj¹(Ú“ğTÑ“À·C'Š…´ '%de,È\n–FCÅÑe9C¹NäĞ‚-6”UeÈµŒıCX¶ĞV±ƒ¹ıÜ+ÔR+ºØ”Ë•3BÜÚŒJğ¢è™œ±æT2 ]ì\0PèaÇt29Ï×(i‹#€aÆ®1\"S…:ö· ˆÖoF)kÙfôòÄĞª\0ÎÓ¿şÕ,ËÕwêƒJ@ìÖVò„µéq.e}KmZúÛïå¹XnZ{G-»÷ÕZQº¯Ç}‘Å×¶û6É¸ğµÄ_ØÕ‰à\nÖ@7ß` Õï‹˜C\0]_ ©Êµù¬«ï»}ûGÁWW: fCYk+éÚbÛ¶·¦µ2S,	Ú‹Ş9™\0ï¯+şWÄZ!¯eş°2ûôà›—í²k.OcƒÖ(vÌ®8œDeG`Û‡ÂŒöL±õ“,ƒdË\"CÊÈÖB-”Ä°(ş„„„p÷íÓp±=àÙü¶!ık’ØÒÄ¼ï}(ıÑÊB–kr_Rî—Ü¼0Œ8a%Û˜L	\0é†Àñ‰b¥²šñÅş@×\"ÑÏr,µ0TÛrV>ˆ…ÚÈQŸĞ\"•rŞ÷P‰&3báP²æ- x‚Ò±uW~\"ÿ*èˆŒNâh—%7²µşK¡Y€€^A÷®úÊC‚èş»p£áîˆ\0ğ..`cÅæ+ÏŠâGJ£¤¸H¿À®E‚…¤¾l@|I#AcâÿD…|+<[c2Ü+*WS<ˆràãg¸ÛÅ}‰Š>iİ€!`f8ñ€(c¦èÉQı=fñ\nç2Ñc£h4–+q8\na·RãBÜ|°R“×ê¿İmµŠ\\qÚõgXÀ –Ï0äXä«`nîF€îìŒO pÈîHòCƒ”jd¡fµßEuDV˜bJÉ¦¿å:±ï€\\¤!mÉ±?,TIa˜†ØaT.L€]“,JŒ?™?Ï”FMct!aÙ§RêF„Gğ!¹Aõ“»rrŒ-pXŸ·\r»òC^À7áğ&ãRé\0ÎÑf²*àA\nõÕ›Háã¤yîY=Çúè…l€<‡¹AÄ_¹è	+‘ÎtAú\0B•<Ay…(fy‹1Îc§O;pèÅá¦`ç’4Ğ¡Mìà*œîf†ê 5fvy {?©àË:yøÑ^câÍuœ'‡™€8\0±¼Ó±?«ŠgšÓ‡ 8BÎ&p9ÖO\"zÇõrs–0ºæB‘!uÍ3™f{×\0£:Á\n@\0ÜÀ£pÙÆ6şv.;àú©„Êb«Æ«:J>Ë‚‰é-ÃBÏhkR`-ÜñÎğawæxEj©…÷Ár8¸\0\\Áïô€\\¸Uhm› ı(mÕH3Ì´í§S™“Áæq\0ùŸNVh³Hy	—»5ãMÍe\\g½\nçIP:Sj¦Û¡Ù¶è<¯Ñxó&ŒLÚ¿;nfÍ¶cóq›¦\$fğ&lïÍşi³…œàç0%yÎ¾tì/¹÷gUÌ³¬dï\0e:ÃÌhïZ	Ğ^ƒ@ç ı1€Ïm#ÑNów@ŒßOğğzGÎ\$ò¨¦m6é6}ÙÒÒ‹šX'¥I×i\\QºY€¸4k-.è:yzÑÈİH¿¦]ææxåGÏÖ3ü¿M\0€£@z7¢„³6¦-DO34Ş‹\0ÎšÄùÎ°t\"Î\"vC\"JfÏRÊÔúku3™MÎæ~ú¤Ó5V à„j/3úƒÓ@gG›}Dé¾ºBÓNq´Ù=]\$é¿I‡õÓ”3¨x=_j‹XÙ¨fk(C]^jÙMÁÍF«ÕÕ¡ŒàÏ£CzÈÒVœÁ=]&\r´A<	æµÂÀÜãç6ÙÔ®¶×´İ`jk7:gÍî‘4Õ®áë“YZqÖftu|hÈZÒÒ6µ­iã€°0 ?éõéª­{-7_:°×ŞtÑ¯íck‹`YÍØ&“´éIõlP`:íô j­{hì=Ğf	àÃ[by¢Ê€oĞ‹B°RS—€¼B6°À^@'4æø1UÛDq}ìÃNÚ(Xô6j}¬cà{@8ãòğ,À	ÏPFCàğ‰Bà\$mv˜¨Pæ\"ºÛLöÕCS³]›İàEÙŞÏlU†Ñfíwh{o(—ä)è\0@*a1GÄ ( D4-cØóP8£N|R›†âVM¸°×n8G`e}„!}¥€Çp»‡Üòı@_¸ÍÑnCtÂ9Ñ\0]»u±î¯s»Šİ~èr§»#Cn p;·%‹>wu¸ŞnÃwû¤İê.âà[ÇİhT÷{¸İå€¼	ç¨Ë‡·JğÔÆ—iJÊ6æ€O¾=¡€‡ûæßE”÷Ù´‘ImÛïÚV'É¿@â&‚{ª‘›òö¯µ;íop;^–Ø6Å¶@2ç¯lûÔŞNï·ºMÉ¿r€_Ü°ËÃ´` ì( yß6ç7‘¹ıëîÇ‚“7/Ápğe>|ßà	ø=½]Ğocû‘á&åxNm£‰çƒ»¬ào·GÃN	p—‚»˜x¨•Ã½İğƒy\\3àø‡Â€'ÖI`râG÷]Ä¾ñ7ˆ\\7Ú49¡]Å^p‡{<Zá·¸q4™uÎ|ÕÛQÛ™àõp™ıši\$¶@oxñ_<Àæ9pBU\"\0005— iä×‚»¸Cûp´\nôi@‚[ãœÆ4¼jĞ„6bæP„\0Ÿ&F2~Àù£¼ïU&š}¾½¿É˜	™ÌDa<€æzx¶k£ˆ‹=ùñ°r3éË(l_”…FeF›4ä1“K	\\Óldî	ä1H\r½€ùp!†%bGæXfÌÀ'\0ÈœØ	'6Àps_›á\$?0\0’~p(H\n€1…W:9ÕÍ¢¯˜`‹æ:hÇB–èg›BŠk©ÆpÄÆót¼ìˆEBI@<ò%Ã¸Àù` êŠyd\\Y@D–P?Š|+!„áWÀø.:ŸLe€v,Ğ>qóAÈçº:–îbYéˆ@8Ÿd>r/)ÂBç4ÀĞÎ(·Š`|é¸:t±!«‹Á¨?<¯@ø«’/¥ S’¯P\0Âà>\\æâ |é3ï:VÑuw¥ëçx°(®²Ÿœ4€ÇZjD^´¥¦Lı'¼ìÄC[×'ú°§®éjÂº[ E¸ó uã°{KZ[s„€6ˆ‚S1Ìz%1õc™£B4ˆB\n3M`0§;çòÌÂ3Ğ.”&?¡ê!YAÀI,)ğå•l†W['ÆÊIÂ‡Tjƒè>F©¼÷S§‡ BĞ±Pá»caşÇŒuï¢NİÏÀøHÔ	LSôî0”ÕY`ÂÆÈ\"il‘\rçB²ëã/Œôãø%P€ÏİN”Gô0JÆX\n?aë!Ï3@MæF&Ã³Öş¿,°\"î€èlbô:KJ\rï`k_êb÷üAáÙÄ¯Ìü1ÑI,Åİîüˆ;B,×:ó¾ìY%¼J Š#v”€'†{ßÑÀã„	wx:\ni°¶³’}cÀ°eN®Ñï`!wÆ\0ÄBRU#ØSı!à<`–&v¬<¾&íqOÒ+Î£¥sfL9QÒBÊ‡„ÉóäbÓà_+ï«*€Su>%0€™©…8@l±?’L1po.ÄC&½íÉ BÀÊqh˜¦ó­’Áz\0±`1á_9ğ\"–€è!\$øŒ¶~~-±.¼*3r?øÃ²Àd™s\0ÌõÈ>z\nÈ\0Š0 1Ä~‘ô˜Jğ³ğú”|SŞœô k7gé\0ŒúKÔ d¶ÙaÉîPgº%ãw“DôêzmÒûÈõ·)¿‘ñŠœj‹Û×Âÿ`k»ÒQà^ÃÎ1üŒº+Îåœ>/wbüGwOkÃŞÓ_Ù'ƒ¬-CJ¸å7&¨¢ºğEñ\0L\r>™!ÏqÌîÒ7İÁ­õoŠ™`9O`ˆàƒ”ö+!}÷P~EåNÈc”öQŸ)ìá#ûï#åò‡€ì‡ÌÑøÀ‘¡¯èJñÄz_u{³ÛK%‘\0=óáOX«ß¶Cù>\n²€…|wá?ÆF€Åê„Õa–Ï©UÙåÖb	N¥YïÉhŠ½»é‘/úû)ŞGÎŒ2ü™¢K|ã±y/Ÿ\0éä¿Z”{éßP÷YG¤;õ?Z}T!Ş0ŸÕ=mN¯«úÃfØ\"%4™aö\"!–ŞŸúºµ\0çõï©}»î[òçÜ¾³ëbU}»Ú•mõÖ2±• …ö/tşî‘%#.ÑØ–Äÿse€Bÿp&}[ËŸÇ7ã<aùKıïñ8æúP\0™ó¡g¼ò?šù,Ö\0ßßˆr, >¿ŒıWÓşïù/Öş[™qık~®CÓ‹4ÛûGŠ¯:„€X÷˜Gúr\0ÉéŸâ¯÷ŸL%VFLUc¯Şä‘¢şHÿybP‚Ú'#ÿ×	\0Ğ¿ıÏì¹`9Ø9¿~ïò—_¼¬0qä5K-ÙE0àbôÏ­üš¡œt`lmêíËÿbŒàÆ˜; ,=˜ 'S‚.bÊçS„¾øCc—ƒêëÊAR,„ƒíÆXŠ@à'…œ8Z0„&ìXnc<<È£ğ3\0(ü+*À3·@&\r¸+Ğ@h, öò\$O’¸„\0Å’ƒèt+>¬¢‹œbª€Ê°€\r£><]#õ%ƒ;Nìsó®Å€¢Êğ*»ïcû0-@®ªLì >½Yp#Ğ-†f0îÃÊ±aª,>»Ü`ÆÅàPà:9ŒŒo·ğ°ov¹R)e\0Ú¢\\²°Áµ\nr{Ã®X™ÒøÎ:A*ÛÇ.Dõº7»¼ò#,ûN¸\rE™Ô÷hQK2»İ©¥½zÀ>P@°°¦	T<ÒÊ=¡:òÀ°XÁGJ<°GAfõ&×A^pã`©ÀĞ{ûÔ0`¼:ûğ€);U !Ğe\0î£½Ïc†p\r‹³ ‹¾:(ø•@…%2	S¯\$Y«İ3é¯hCÖì™:O˜#ÏÁLóï/šé‚ç¬k,†¯Kåoo7¥BD0{ƒ¡jó ìj&X2Ú«{¯}„RÏx¤ÂvÁä÷Ø£À9Aë¸¶¾0‰;0õá‘à-€5„ˆ/”<Üç° ¾NÜ8E¯‘—Ç	+ãĞ…ÂPd¡‚;ªÃÀ*nŸ¼&²8/jX°\rš>	PÏW>Kà•O’¢VÄ/”¬U\n<°¥\0Ù\nIk@Šºã¦ƒ[àÈÏ¦Â²œ#?€Ùã%ñƒ‚èË.\0001\0ø¡kè`1T· ©„¾ë‚Él¼šÀ£îÅp®¢°Á¤³¬³…< .£>íØ5Ğ\0ä»	O¬>k@Bn¾Š<\"i%•>œºzÄ–ç“ñáºÇ3ÙPƒ!ğ\rÀ\"¬ã¬\r ‰>šadàöó¢U?ÚÇ”3P×Áj3£ä°‘>;Óä¡¿>t6Ë2ä[ÂğŞ¾M\r >°º\0äìP®‚·Bè«Oe*Rn¬§œy;« 8\0ÈËÕoæ½0ıÓøiÂøş3Ê€2@Êıà£î¯?xô[÷€ÛÃLÿa¯ƒw\ns÷ˆ‡ŒA²¿x\r[Ñaª6Âclc=¶Ê¼X0§z/>+šª‰øW[´o2ÂøŒ)eî2şHQPéDY“zG4#YD…ö…ºp)	ºHúp˜&â4*@†/:˜	á‰T˜	­Ÿ¦aH5‘ƒëh.ƒA>œï`;.Ÿ­îY“Áa	Âòút/ =3…°BnhD?(\n€!ÄBúsš\0ØÌDÑ&D“J‘)\0‡jÅQÄyhDh(ôK‘/!Ğ>®h,=Ûõ±†ãtJ€+¡Sõ±,\"M¸Ä¿´NÑ1¿[;øĞ¢Š¼+õ±#<ìŒI¤ZÄŸŒP‘)ÄáLJñDéìP1\$Äîõ¼Q‘>dO‘¼vé#˜/mh8881N:øZ0ZŠÁèT •BóCÇq3%°¤@¡\0Øï\"ñXD	à3\0•!\\ì8#h¼vìibÏ‚T€!dª—ˆÎüV\\2óÀSëÅÅ’\nA+Í½pšxÈiD(ìº(à<*öÚ+ÅÕE·ÌT®¾ BèS·CÈ¿T´æÙÄ e„Aï’\"á|©u¼v8ÄT\0002‘@8D^ooƒ‚ø÷‘|”Nù˜ô¥ÊJ8[¬Ï3ÄÂõîJz×³WL\0¶\0€È†8×:y,Ï6&@”À E£Ê¯İ‘h;¼!f˜¼.Bş;:ÃÊÎ[Z3¥™Â«‚ğn»ìëÈ‘­éA¨’ÓqP4,„óºXc8^»Ä`×ƒ‚ôl.®üº¢S±hŞ”°‚O+ª%P#Î¡\n?ÛÜIB½ÊeË‘O\\]ÎÂ6ö#û¦Û½Ø(!c) Nõ¸ºÑ?EØ”B##D íDdo½åPAª\0€:ÜnÂÆŸ€`  ÚèQ„³>!\r6¨\0€‰V%cbHF×)¤m&\0B¨2Ií5’Ù#]ú˜ØD>¬ì3<\n:MLğÉ9CñÊ˜0ãë\0“¨(á©H\nş€¦ºM€\"GR\n@éø`[Ãó€Š˜\ni*\0œğ)ˆü€‚ìu©)¤«Hp\0€Nˆ	À\"€®N:9qÛ.\r!´JÖÔ{,Û'æÙŠ4…B†úÇlqÅ¨ŸXc«Â4ß‹N1É¨5«WmÇ3\nÁF€„`­'‘ˆÒŠxàƒ&>z>N¬\$4?ó›ÃïÂ(\nì€¨>à	ëÏµPÔ!CqÍŒ¼Œp­qGLqqöG²yÍH.«^à\0zÕ\$€AT9Fs†Ğ…¢D{ía§øcc_€GÈz†)ó³‡ Ü}QÆÅhóÌHBÖ¸<‚y!L­“€Û!\\‚²ˆî ø'’H(‚ä-µ\"ƒin]Äˆ³­\\¨!Ú`M˜H,gÈí»*ÒKfë*\0ò>Â€6¶ˆà6ÈÖ2óhJæ7Ù{nqÂ8àßôÉHÕ#cHã#˜\r’:¶–7Ê8àÜ€Z²˜ZrD£şß²`rG\0äl\n®Iˆi\0<±äãô\0Lg…~¨ÃE¬Û\$¹ÒP“\$Š@ÒPÆ¼T03ÉHGH±lÉQ%*\"N?ë%œ–	€Î\nñCrWÉC\$¬–pñ%‰uR`ÀË%³òR\$–<‘`ÖIfxª¯÷\$/\$„”¥\$œš’O…(‹Ë\0æË\0RY‚*Ù/	ê\rÜœC9€ï&hhá=IÓ'\$–RRIÇ'\\•a=EÔ„òuÂ·'Ì™wIå'T’€€‘üÿ©¾ãK9%˜d¢´·‚!ü”ÀÊÊÀÒj…ì¡íÓÊ&Ğæ„vÌŸ²\\=<,œEùŒ`ÛYÁò\\Ÿ²‚¤*b0>²r®à,d–pdŒŒÌ0DD Ì–`â,T ­1İ% P‘¤/ø\ròb¹(Œ£õJÑèÍîT0ò``Æ¾ŞèíóJ”t©’©ÊŸ((dÇÊªáh+ <Éˆ+H%i‡Èô‹²•#´`­ ÚÊÑ'ô£B>t˜¯J€Z\\‘`<Jç+hR·ÊÔ8î‰€àhR±,J]gò¨Iä•è0\n%J¹*ĞY²¯£JwDœ°&Ê–D±®•ÉĞœªR§K\"ß1Qò¨Ë ”²AJKC,ä´mV’»²›ÊÙ-±òÏKI*±r¨ƒ\0ÇL³\"ÆKb(üªóJ:qKr·dùÊŸ-)ÁË†#Ô¸²Ş¸[ºA»@•.[–Ò¨Ê¼ß4º¡¯.™1ò®J½.Ì®¦u#J“‡Ág\0Æãò‘§£<Ë&”’ğK¤+½	M?Í/d£Ê%'/›¿2YÈä>­\$Í¬lº\0†©+ø—Á‰}-tº’Í…*ê‰Rä\$ß”òÌK».´Á­óJHûÊ‰‡2\r„¿B‚½(PÍÓÌ6\"ü–nf†\0#Ğ‡ ®Í%\$ÄÊ[€\nĞnoLJ°ŒÅÓÂe'<¯ó…‡1KíÁyÌY1¤Çs¥0À&zLf#üÆ³/%y-²Ë£3-„Â’ÍK£L¶ÎÉ×0œ³’ë¸[,¤ËÌµ,œ±’«„§0”±Ó(‹.DÀ¡@ÏÁ2ïL+.|£’÷¤É2è(³L¥*´¹S:\0Ù3´ÌíóG3lÌÁaËl³@L³3z4­Ç½%Ì’ÍLİ3»…³¼!0Š33=Lù4|È—¡à+\"°Êé4´Ëå7Ë,\$¬SPM‘\\±Î?JŠY“Ì¡¹½+(Âa=K¨ì4œ¤³CÌ¤<Ğ…=\$,»³UJ]5h³W &tÖI%€é5¬Ò³\\M38g¢Í5HŠN?W1Hš±^ÊÙÔ¸“YÍ—Ø Í.‚N3MŸ4Ã…³`„i/P‰7ÖdM>šd¯/LRÎÜâ=K‘60>¯I\0[ğõ\0ßÍ\r2ôÔòZ@Ï1„Û2ÿ°7È9äFG+ä¯ÒœÅ\r)àhQtL}8\$ÊBeC#Á“r*HÈÛ«-›Hı/ØËÒ6Èß\$øRC9ÂØ¨!‚€Å7ük/PË0Xr5ƒ¡3D„¼<TÁÔ’q¯Kô©³nÎH§<µFÿ:1SLÎrÀ%(ÿu)¸Xr—1Ñ€nJÃIÌ´S£\$\$é.Î‡9Ôé²IÎŸÒ3 ¨LÃl”“¯Î™9äÅC•N #Ô¡ó\$µ/ÔésÉ9«@6Êt“²®Nñ9¼´·NÉ:¹’Â¡7ó Ó¬Í:DáÓÁM)<#–ÓÃM}+ñ2ÎNşñ²›O&„ğ¢JNy*ŒòòÙ¸[;ñóÎO\"mÚÄóÅMõ<c Â´‚°±8¬K²,´ÓÇN£=07s×JE=Tá³ÆO<Ôô³£Jé=D“Ó:ÏC<Ì“àË‰=äèó®KÊ»Ì³ÈL3¬÷­„LTĞ€3ÊS,œ.¨ÿÏq-Œñsç7Í>‚?ó¼7O;Ü `ùOA9´óñÏ»\$œüÁOÑ;ìı`9ÎnÇIAŒxpÜöE=O¹<ü²5ÏÎ„ı2¸O?d´„´Œ`NòiOÿ>Œş3½P	?¤òÔOmœúSğMôË¬·†=¹(ãdã¤AÈ­9“‘\0í#üä²@ƒ­9DÁÉ&ÜıòŠ‚?œ “Ği9»\nà/€ñAİóòÈ­A¤ıSËPo?kuN5¨~4ÜãÆ6††Ø=ò–Œ“*@(®N\0\\Û”dGåüp#è¤> 0À«\$2“4z )À`ÂW˜ğ +\0Š‘80£è¦• ¤ª”äz\"TĞä0Ô:\0Š\ne \$€rM”=¡r\n²N‰P÷Cmt80ğú #¤ØJ= &ĞÆ3\0*€Bú6€\"€ˆéèú€#Ì>˜	 (Q\nŒğê´8Ñ1C\rt2ƒECˆ\n`(Çx?j8N¹\0¨È[À¤QN>£©à'\0¬x	cêªğ\nÉ3×Chü`&\0²Ğ´8Ñ\0ø\näµ¦úO`/€„¢A`#ĞìXcèĞÏD ÿtR\n>¼ÔdÑBòD´LĞÄÌõ‰äĞÍDt4ĞÖ j”pµGAoQoG8,-sÑÖğÔK#‡);§E5´TQÑGĞ4Ao\0 >ğtMÓD8yRG@'PõC°	ô<PõCå\"”K\0’xüÔ~\0ªei9Ğìœv))ÑµGb6‰€±H\r48Ñ@‚M‰:€³FØtQÒ!H•”{R} ôURpÍÔO\0¥I…t8¤ØğûÎÇ[D4FÑD#ÊÑ+D½'ôMÊ•À>RgIÕ´ŠQïJ¨””UÒ)EmàüTZ­Eµ'ãê£iEİ´£ÒqFzAªº>ı)T‹Q3HÅ#TLÒqIjNT½¼…&CøÒhX\nT›ÑÙK\0000´5€ˆ¢JHÑ\0“FE@'Ñ™Fp´hS5F\"ÎoÑ®e%aoS E)  €“DU «Q—FmÎÑ£M´ÑÑ²e(tnÒ “U1Ü£~>\$ñßÇ‚’­(hÕÇ‘Güy`«\0’ê 	ƒíG„ò3Ô5Sp(ıõPãGí\$”œ#¤¨	©†©N¨\nôV\$ö]ÔœPÖ=\"RÓ¨?Lzt·ƒ1L\$\0ÔøG~å ,‰KNı=”ëÒGMÅ”…¤NS€)ÑáO]:ÔŠS}İ81àRGe@Cí\0«OPğSõNÍ1ôİT!P•@ÑİS€ğÿÕS‰G`\nÉ:€“P°j”7R€ @3üÑ\n‘ üã÷â£”DÓ æúLÈÏ¼ 	èë\0ùQ5ôµ©CPúµSMP´v4†º?h	hëT‡D0úÑÖàõ>&ÒITxôO¼?•@U¤÷R8@%Ô–ŒõK‰€§NåKãóRyE­E#ıù @ıÃøä%Là«Q«Q¨µ£ª?N5\0¥R\0úÔTëFåÔ”RŸSí!oTEÂC(Ï¶ÈıÄµ\0„?3iîSS@U÷QeMµƒ	KØ\n4PÕCeS”‘\0NC«P‚­Oõ! \"RTûõ€S¥NÕÁU5OU>UiIÕPU#UnKPô£UYTè*ÕC«U¥/\0+º¸Å)ÈÚ:ReAà\$\0ø¤xòÇWDº3Ãêà`üÚüçU5ÒIHUY”ô:°P	õe\0–MJi€ƒµÃıQø>õ@«T±C{›ÕuÑì?Õ^µv\0WR]U}Cöê1-5+Uä?í\rõW<¸?5•JU-SXüÕLÔß \\tÕ?ÒsMÕb„ÕƒVÜt§TŒ>ÂMU+Ö	EÅcˆÏÔ9Nm\rRÇƒCı8SÇX•'RÒéXjCI#G|¥!QÙGh•tğQ¸ı )<¹YĞ*ÔĞRmX0üôö½M£›õOQßYıhÀ«ßduÕ¤ÕZ(ıAo#¥NlyN¬V€Z9IÕºM•¦V«ZuOÕ…TÕTÅEÕ‡Ö·SÍeµµÖÊ\nµXµªSÛQERµ³ÔÙ[MF±VçO=/õ­¨>õgÕ¹TíVoUT³Z’N€*T\\*ÃïĞ×S-pµSÕÃVÕq€ÒM(ÏQ=\\-UUUV­C•Ä×ZØ\nu’V\$?M@UÎWJ\r\rUĞÔ\\å'U×W]…W”£W8ºN '#h=oCóĞıF(üé:9ÕYu•†¤÷V-UÓ9Ÿ]ÒC©:U¿\\\nµqW—™à(TT?5Páª\$ R3ÕâºŸC}`>\0®E]ˆ#Rêà	ƒÿ#R¥)²W–’:`#óGõ)4ŠRÀı;õáViD%8À)Ç“^¥Qõé#”h	´HÂX	ƒş\$Nıx´š#i xûÔ’XRõ€'Ô9`m\\©†¨\nEÀ¦Q±`¥bu@×ñN¥dT×#YYı„µ®GV]j5#?L¤xt/#¬”å#é…½O­PÕëQæ¢6•££Ï^í† €šğüÖØM\\R5t´Óšpà*€ƒXˆV\"WÅD€	oRALm\rdGN	ÕÖÀú6”p\$PåºŸE5Ôı†©Tx\n€+€‹C[¨ôVŒıÖ8U•Du}Ø»F\$.ªËQ-;4È€±NX\n.XñbÍ•\0¯b¥)–#­NıG4KØĞZS”^×´M¶8Øód­\"C‚¬>ÅÕdHe\nöY8¥Ñ.ê ú°ˆÒFúD”½W1cZ6”›QâKHü@*\0¿^¸úÖ\\QßF‚4U3Y|‘=˜Ó¤éE›ÔÛ¤¦?-™47YƒPm™hYw_\ršVe×±M˜±ßÙe(0¶ÔFÕ\r !ÒPUI•uÑ7Qå•CèÑ?0ÿµİgu\rqà¤§Y-Qèó°èú=g\0…\0M#÷U×S5Zt®ÖŸae^•\$>²ArV¯_\r;tî¬’¨”HW©Zí@HÕØhzDèÚ\0«S2Jµ HIåO 'ÇeígÉ6¹[µR”<¸?È /ÒKM¤ö–Ø\n>½¤HáZ!iˆö¤ŸTX6–Ò×iºC !Ó›g½à ÒG }Q6Ñ4>äwà!Ú™C}§VBÖ>åªUQÚ‘jª8cïUTàû–'<‚>ÈıõôHC]¨VšÑ7jj3v¥¤å`0ÃèÈ23ö°Ğòxû@U—k \n€:Si5Õ#Yì-wî”ÕàéM?céÒMQÅGQÕÑƒb`•ò\0@õËÒ§\0M¥à)ZrKXûÖŸÙWl­²öÍlå³TM×D\r4—QsS¥40ÑsQÌõmYãh•d¶ÂC`{›V€gEÈ\n–»XkÕà'Óè,4ú¼¹^í¢6Æ#<4éNXnM):¹·OM_6d€–æõ¸Ãõ[\"KU²nÖ?l´x\0&\0¿R56ŸT~> ô†Õ¸?”Jn€’ ˆÏZ/iÒ6ôÎÚglÍ¦ÖUÛáF}´.£¼JLöCTbM4ÍÓcLõTjSD’}JtŒ€Z›ªµÇ:±L­€´d:‰Ez”Ê¤ª>ÖV\$2>­µ¢[ãpâ6öÔR9uêW.?•1®£RHuèÛR¸?58Ô®¤íDİÆuƒ£çpûcìZà?œr×» Eaf°}5wY´ëå‚Ï’ÒêÅW‚wT[Sp7'Ô_aEk \"[/i¥¿#ÿ\$;m…fØ£WOüô”ÔFò\r%\$Íju-t#<Å!·\n:«KEA£íÒÑ]À\nUæQ­KEÀ #€¿Xå¨÷5[Ê>ˆ`/£ÍDµÊÖ­VEpà)åI%ÏqßÜûníx):¤§le¢´Õ[eÕ\\•eV[j…–£éÑ7 -+ÖßGWEwt¯WkEÅ~uìQ/mõ#ÔW—`ıyu“Ç£DİAö'×±\r±•Õ™OD )ZM^€³u-|v8]‹g½‘hö×ÅLà–W\0øÈû6ËX†‘=YÔd½Q­7Ï“”Ï9£çÍ²r <ÃÖêD³ºB`c 9¿’È`D¬=wx©I%ä,á„¬†è²àêƒj[ÑšÖíßOÿ‹´ ``Å|¸òòÆŞø¤Œ˜¼í.Ì	AOŠÀÄ	·‰@å@ 0h2í\\âĞ€M{eã€9^>ô•â@7\0òôË‚W’€ò\$,íÉÅš¡@Ø€Òâ•å×w^fmå‰,\0ÏyD,×^X€.¯Ö†©7ã·›Ã×2İÅf;¥€6«\n”¤…^ŸzC©×§mz…én–^ˆô”&LFFê,°ö[€¥eÈõaXy9h€!:zÍ9còQ9bÅ !€¦µGw_WÉg¥9©ÓS+t®ÚápİtÉƒ\nm+–œŞÙ_ğ	¡ª\\¼’k5£ÒÜ]Æ4ˆ_h•9 Ù÷N…—Å]%|¥ˆ7ËÖœ];”ï|ñµ ßXıÍ9Õ|åñ×ÌG¢“¨[×Ô\0‘}Uñ”çßMCI:ÒqO¨VÔƒa\0\rñRÍ6Ï€Ã\0ø@H¢ÅP+rìS¤Wãè€øp7äI~p/ø HÏ^İê²ü¤¬E§-%û¥Ì»Í&.ÎÄ+¸JÑ’;:³¶«!“ıĞNğ	Æ~öª‰€/“WÄÂ!„BèL+Â\$ğíq§=ü¿+Ñ`/Æ„e„\\±ÒÏxÀpE‘lpSÂJSİ¢½ö6à‡_¹(Å¯©Äéb\\OÆÊ&ì¼\\Ğ59\0ûÂ€9nñøD¸{¡\$á¸‹K‘v2	d]èv…CÕşÅÕ?tf|WÜ:£Ô¨p&¿àLn„Îè³î{;ˆçÚGR9øT.y¹üïI8€¹´\rl° ú	Tè n”3¼öğT.ƒ9´è3› š¼Zès¡¯ÑÒGñşˆ:	0£¦£zè­İ.Œ]ÀçÄ£Q›?àgT»%ñ™ÕxŒÕŒ.„šÔÇn<ì£-â8BË³,Bòì˜rgQş¢íßó„É`Úá2é„:îµ½{…gëÄs„øgóZ¿•… ×Œ<æ×w{¦˜ƒbU9ˆ	`5`4„\0BxMpğ‘8qnahé†@Ø¼í†-â(—>S|0®…¾¥…3á8h\0Ñ«µCÔzLQ@¶\n?†¸`AÀ >2šÂ,÷á˜ñN&Œ«xˆl8sah1è|˜B‡É‡DxBŞ#V—‹V–×Š`Wâa'@›‡¬	X_?\nì¾  •_â. ØP¼r2®bUarÀI¸~áñ…S“àú\0×…\" 2€ÖşÀ>b;…vPh{[°7a`Ë\0êË²j—oŒ~·ûşvÍÙ|fv†4[½\$¶«{ó¯P\rvæBKGbpëÈÅø™–OŠ5İ 2\0j÷Ù„L€î)ÇmáÈV¡ejBB.'R{C¤ïV'`Ø‚ ‰%­Ç€Ğ\$ Oå\0˜`‚’«4 ÌNò>;4£³¢/ÌÏ€´À*Âø\\5„ÅÁ!†û`X*Ş%îÄNÍ3SõAMôşËÆ”,ş1¬²®í\\¯²caÏ§ ³ù@Ø¬Ëƒ¸B/„¬Íø0`óv2ï¡„§Œ`hDÅJO\$ç…@p!9˜!¥\n1ø7pB,>8F4¯åf Ï€:“ñ7Â„î3›£3…¿à°T8—=+~Øn«Îâ\\Äe¸<br·ş øFØ²° ¹C¡N‹:c€:Ôl–<\r›ã\\3à>ñ˜‡À6ONnŠä!;áñ@›twë^Fé€Là;€×º,^aÈ\ra\"ŞÀÚ®'ú:„vàJe4Ã×;•ñ_d\r4\rÌ:ÛüÀ¬S˜à2€[c€„XÿÊ¦Pl˜\$¹Ş£i“wåd#B šb›Î×¤õ’™`:†€Ï~ <\0Ñ2Ù·—‘RŒÂÆPÈ\r¸J8D¡t@ìEè\0\rÍœ6öóäŞ7•½ä˜YÏ£ú\"åäÀš\rüƒ¦Àš3ƒ¡.˜+«z3±;_ÊŸvLİäÓwJ¿94ÀIJa,A¦ñˆ¯;ƒs?ÖN\nR‡!§İ†Om…sÈ_æà-zÛ­w„€ÛzÜ­7¡ÍÅzî÷–M”ˆ€o¿”¥æ\0¢ƒa”Åİ¹4å8èPfñYå?”òi—–eBÎSà1\0ÉjDTeK”®UYSå?66R	¦cõ6Ry[c÷”°5Ù]BÍ”ÖRù_eA)&ù[å‡•XYRW–6VYaeU•fYeåw•U¹båw”Eë°Ê†;z¤^W«9–ä×§äİ–õë\0<Ş˜èeê9SåÎ¤daª	”_-îá‰L×8Ç…ÍQöèTH[!<p\0£”Py5ˆ|—#ê‘P³	×9vàš2Â|Ç¸áfao†á,j8×\$A@kñƒ¿aË‘½bócñÈf4!4¨‘¶cr,;™‘æ‘öbÆ=€Â;\0°øÅº…˜†cdÃæX¾bìx™a™Rx0Aãh£+wğxN[˜ÜB·pÚƒ¿w™TÀ8T%™šMšl2à‡½¡šğ—}¡Ès.kY„˜0\$/èfU€=şØs„gKÃ¡ˆM› õ?ÿ›ç`4c.Ôø!¡&€åˆ†g°ûfà/şf1=¯›V AE<#Ì¹¡f\n») Šë›Npò“ã`.\"\"»Açœ¤ã—üq¸X“ Ù¬:aÉ8™¹f¯™Vsó‹G™Şr:æVŞÆcÔgVl™g=`ã“WËıyÒgUÀË™ªáº¼îeT= ã€á€Æx 0â M¼@ˆ»šÂ%Îºb½œşw™ÆfÛÙOøç­˜Ü*0¯…®|tá°%±™PÈÍpæúgKù¬?pô@JÀ<BÙŸ#­`1„î9ş2çg¶!3~ØÜçînläÅfŠØVhù¬.Ñ€à…aCÑù•?³Šû-à1œ68>A¤ˆaÈ\r—¦y‹0 Öi‘J«} à¹© Ğz:\r¡)‘Sş‚¡@¢åh@äöƒY¹ã´mCEg¡cyÏ†‚<õàÍh@¼@«zh<WÙÄ`Â•¨±:zOãÎÖ\rÍêW«“°V08Ùf7™(Gyƒ²`St#ï„f†#ƒ²œC(9ÈÂ˜Ø€dùææ8T:¯»Œ0ºè qµ  79·á£phAgÜ6Š.ãæ7Fr™bä ÈjšèA5î…†ƒá¡a1úÚh•ZCh:–%¹ÎgU¢ğD9ÖÅÉˆ„×¹Ïé0~vTi;VvSš„wœØ\rÎƒ?àÇf²£…ÿ¥nŠÏ›iY™ìaº¬3 Î‡9Õ,\n™Ãr‘‰,/,@.:èY>&…šFÑ)ú™¶}šb£€èiOİiæš:dèAŒn˜šc=¤L9O’h{¦ 8hY.’ÙÀ®¾‡®‡…œüÇ\r¬Ö‡£À›Šé1Q¯U	”C‘hô†eÿO‰›°+2oÌÎìŞN‹˜÷§øzpè¢(ş]Óh€å¢Z|¬O¡cÑzDáş;õT\0j¡\0…8#>ÎÁ=bZ8Fjóìé;íŞºTé…¡w®Í)¦ıøN`æë¨¤Ã…B{ûƒz\ró¡c“Óè|dTG“iœ/ûú!i†Ê0±¼ø'`Z:ŠCHï(8Âê`V¥™Úãöª\0Üê§©†£WïßÇª˜ÕzgG¾‘…ƒ½²-[ÃĞ	iœêN\rqºé«n„„“o	Æ¥fEJı¡apb¹ê}6£…Õ=o¤–„,tèY+ö®EC\rÖPx4=¼¾™Ù@‡‰¦.†‘F£[¡zqçÜèX6:FG¨ #°û\$@&­ab¤şhE:²ƒå¬ä`¶S­1—1g1©ş„2uhY‹¬_:Bß¡dcï–*ÿ­†\0úÆ—FYFœ:Ë£ªn„ØÌ=Û¨H*Z¼Mhk/ëƒ¡zÙ¹ï‹´]šÁh@ôæ©Øã1\0˜øZKù¢ëÎÆè^+º,vfós®š>ˆ¤’Oã|èÀÊsÃ\0Öœ5öXé‹îÑ¯F„÷n¿Aˆr]|ÏIi4è…ş ØÂC° h@Ø¹´Ÿ–cß¥¨6smOÃå‰™›gX¬V2¦6g?~ÖÃYÕÑ°†súcl \\RŠ\0Œ¨cœA+Œ1°„›ùÌé\n(ÑúÃÌ^368cz:=z÷‚(äø ;è£¨ñsüF¶@`;ì€,>yTßï&–•d½L×Ÿœÿ%Òƒ-ëCHL8\r‡Çbû°°£úMj]4Ym9üÛüĞZÚBøïP}<ŸûàX²¯‰Ì¥á+gÅ^ØMŞ + B_Fd¬X„ø‹lówÈ~î\râ½‹è\":ÔêqA1X¾ìæ²Ğø¯3ÖÎ“Eáh±4ßZZÂó¸& …ææ1~!Nfã´öo—ˆ™\nMeÜà¬„îëXIÎ„íG@V*X¯†;µY5{Vˆ\nè»ÏTéz\rF 3}m¶Ôp1í[€>©tèe¶w™Ÿæë@VÖz#‚2Äï	iôôÎ{ã9ƒ‚pÌ»gh‘Šæ+[elU‰¦ÛAßÙ¶Ó¼i1Ä!Œ¾ommµ*Kà‡ê}¶°!íÆ³í¡®İ{me·f`“—mè˜CÛz=nŞ:}g° T›mLu1FÜÚ}=8¸ZáíèOÛmFFMf¤…OO€ğîáÀ‹ƒèøß/¼éõ¸Ş“šå€şV™oqj³²èn!+½òµüZ¨ËI¹.Ì9!nG¹\\„›3a¹~…O+Îå::îK@Œ\nÚ@ƒ‘¤Hph‘´\\BÄõdmfvCèÓPÛ\" æ½Û.nW&–ên¢øHYş+\r¶“Äz÷i>MfqÛ¤î­ºùİQc‚[­H+æÀo¤Ñ*ú1'¤÷#ÄEw€D_Xí)>Ğs£„-~\rT=½£à÷ˆà- íy§m§¹æğ{„hóŸÌjÚMè)€^¹ïÀ'@Vå¡+iÈîÎò›Ÿåµ†É;F“ D[Îb!¼¾´B	¦¤:MP‹îóÛ­oC¼vAE?éC²IiYÍ„#şp¶P\$kâJŞq½.É07œşöxˆl¦sC|ï½¾bo–2äXª>Mô\rl&»Ç:2ã~ÛÑcQ²îò²æoÑŞdá‚-şèUÜRo‚YšnM;’n©#–ß\0–P¾fğÚPo×¿(CÚv<Ê¬ø[òoÛ¸”šû×fÑ¿ÖüÁ;ßáº–õ[úYŸ.o®Up¿®pUŒø”. ©B!'\0‹òã<Tñ:1±À¾ šã¤î<„›ğnˆîF³ğƒI¢Ç”´‚V0ÊÇRO8‰wøÎ,aFú¼É¥¹[´ÎŸ…ñYOù«‰€/\0™Ùox÷ÇQğ?§°:Ù‹ëÆè`h@:ƒ«¿öÑ/Mím¼x:Û°c1¤Öàû¯ív²;„‚è^æØÆ@®õ@£úğ½ÂÇ\n{¯¼Âî‹à;ç‘´B¼í¸8‘º gå’ä\\*gåyC)Û„E^ıOÄh	¡³¦Aƒu>Æèü@àDÌ†Yæ¼í›â`o»<>Àƒp‰™ŠÄ·’q,Y1Q¨Áß¸†/qgŒ\0+\0âæå‡Dÿƒç?¶ş î©Úßîk:ù\$©û¬í×¥6~I¥…=@íÑ!¾ùvÚzOñš²â+ÍõÆ9Çi³–›¼aïğ†êû…gòğôî¿—¹ÿ?š0Gn˜q²]{Ò¸,FáÃøO¡â„Ş <_>f+¢,ñÌ	»Ôñ±&ôœ†ğíÂ·¼yêÇ©Oü:¬UÂ¯ˆLÆ\nÃÃºI:2³¿-;_Ä¢È|%éå´¿!Îõf\$¦ˆ†Xr\"Kniîñ—ÀĞ\$8#›g¤t-›€r@LÓåœè@S£<‘rN\nD/rLdQkà£“”ªõÄîeğåäãĞ­åø\n=4)ƒB˜”Ë×šôÌZ-|Hb¡†‘HkÊ*	ÖQ!Ğ'êG ›Ybt!¿Ê(n,ìP³OfqÑ+X“Y±ÿ‚ë\"b F6ÖÌr fò\"ÒÜ³!N¡ó^¼¦r±B_(í\"¨KÊ_-<µò *Q÷ò¨Ù/,)H\0„‰²rç\"z2(¹tÙ‡.F>†‡#3â®Ø¦268shÙ ş¨Æ‘I1Sn20¶çÊ-«4’ÚÇ2Aœs(¬4ä¼Ë¶Š\0Æİ#„årşK'ËÍ·G'—7&\n>xßüÜJØGO8,ó…0¼â‹ù8”ÑÓ\0óW9’İIˆ?:3nº\r-w:³ÂÌÅ×;3È‰”!Ï;³Üêƒ˜˜Z’RMƒ+>ÖÜğÊé0/=R…'1Ï4Õ8ûÑÏmÿ%È¥}Ï‡9»;‚=ÏnQöã=ÏhhLõ·GÏkWÎ\rô	%Ø4ÒœsñÎ–J€3sÛ4—@™U‚%\$ÜÑN;Ì?4­»óNÚÏ2|ÊóZÚ3Øh\0Ï3“5€^Àxi2d\r|ûM·Ê£bh|İ#vÇ` \0”ê®äàû\$\r2h#ú¤?³ˆI\n’¼+o-œŠ?6`á¹½¿.\$µšøKY%ØÂJ?¦c°RN#K:°KáELÁ>:Á¥@ŒãjP‘Ìn_t&slm’'æĞ©É¸Óœ²Œ½—ã;6Û—HU5#ìQ7U ıWYÜU bNµ–Wû_ûª©;TCø[İ<Ú–>ÅÇõ‰WıCUÔ6X#`MI:tùÓµ€ö	u#`­fu«\$«t­öXó`f<Ô;båghöÑÕ9×7ØS58õ¬İ#^–-õ\0êÀúîÕ¹R*Ö'£¨(õğõqZå££êX¹QİFUvÔW GWíñÓTêÇWô~Ú­^§WöÄÁÕıJ=_Ø—bmÖİbV\\l·/ÚMÕÿTmTOXuÊ=_ıITvvu‹a\rL_ÕqR/]]mÒsu=H=uÑg o\\UÕ…gM×	XVU À%õhı¡53U™\\=¡öQßØM¹v‡€¡gåmàõue¡ˆÙûhÿbİMİGCeO5®ÔÖO5…ÔYÙi=eÕ	GTURvOa°*İivWX•J5<õ¯bu ]ˆ×Öğúµ<õÃÙÕ\$u3v#×'eöuÑR5m•Šv‹D5.vŒõW=ŸU_å(´\\VØÏ_<õ÷SÍn)Ü1M%QháZ‡T…f5EÕ'ÕÍW½ŠvÅUmiÕ‚UÔÕ]aW©U§dRváÙ-YUZuÙUV—UiRV™õ³ÓÇ[£íZMU§\\=Âv{ÛXıµ¼wQ÷huHvÇ×gqİ´w!Úoqt¢U{TGqı{÷#^G_ubQ„êå•i9Qb>ÚNUdº±k…½5hPÙmu[•\0¦êÅ_¶é[õY-ğô÷rõÈÕ(ÖCrMeıJõ!h?QrX3 xÿÈÏ#‡÷xÖ<Û{u5~ƒíÑ-İuëYyQ\r-”î\0ùuÕ£uuÙ¿pUÚ…•)–PåÜ\r<u«S›0İÉw¹ß-iİóÔ!ÌÖŠøB÷áÆd]ùèÅ‡ÔÆEêğvlmQİ6k¼ÒJ´ˆwí¦ÄØÃãŒED¶UÙR“ev:XßcØNW}`-¨tÓH#e„bº±u€ãó	~B7ê ?ƒ	OPœCWµ×SEÍ•V>¶“×UÛ7ßç‰Ôám»Ó‚¬zÿ=µƒÍØ1º™ƒ+ ¹mÃI,>µX7àä] .‡½*	^îŠã°N…º.èÎ/\"„˜)Ğ	…¯‚s®|à¤çÓŸĞlÁ}ã¸Íç!óîƒ‘5n±p„j£¾h’}½èğm“EázHÂaO0d=A|wëß³ãë×šÎìu²œŸvùØ¼G€x#®…b”cSğo-‰ùtOm`C‹ò^MŒÅ@ë´h­n\$k´`ş`HD^PEà[äŒ]¹¨rR¸m=‚.ñÙ‡>Ayi‚ \"ú€ò	Ö·oã-,.œ\nq+À¥åfXdŠ«¶ã*ß½ˆKÎØƒ'Üê Ğ%aôÿ‡ù9pûæ—øKLM„à!ş,èÊË¨ŒzX#˜Vá†uH%!Àœ63œJ¾ryÕíùq_èu	úWù±‡Æ|@3b1åÈ7|~wï±³şíA7“ÒÂ›è™	¼™9cS&{ãäÒ%VxğïkZO‰×w‰Ur?®„’ªN Î|…CÉ#Å°õåÕ¯ ¹/ú™9ftEw¸CÁºa¦^\0øO<şW¦{Yã=éŸeë˜ınÉ„ígyf0h@ìSİ\0:C©´^€¸VgpE9:85Ã3æŞ§áºğ@»áj_ª[Ş+«êÇ©xƒ^“ê®†~@Ñ‡Wª¸ãã“œ†9x—FC˜¿­.ãšçöük^Iû¡pU9üØSŸØ÷½—œ\$óóø\r4´…ù\0ÎèO°ã‘Ä)L[Âp?ì.PECSìI1nm{Å?PîWAß²Á;€ñìD°;SºaKføò›%?´XõŞ+¤B>½ù9¿¯ÙGj˜cz‘AÍ÷:êa³n0bJ{o¥·!3À­!'’ØKÃÅíùÔ}ã\\èÎ3Wøê5îxÏÉÁL;ƒ2Î¶n—a;²í×ºXÓ›]Éoºœxû{ä¦5Ş™jX÷ˆğ—¶vÓšéãqŞÊEE{Ñ€4Á¾öÄ{íÙç	Ì\nöÊ>ù™aï¯·¾üì§ïØLûÔûåïÿ½ûìñ'ğ½Şé{ë\n‰—>JøßŒŒá¸Ó—†÷YÏ\rOÊ½ğ‘t¯ÿû¥-OÃ¦ü4Ôÿ9Fü;ğ§Á»ÔüGğøIªFßì1ÂoÿßóñO²¾éa{w—0Ó»ï¤Æ¯;ñ”„‘lüoñàJĞTb\rwÇ2®Jµş=D#ònÁ:ÉyñûSø^ã,.¿?(ÈI\$¯ÊÆ¯í¨á3÷Ãsğ4MÊaCRÉÆÍGÌ‘œúIß°n<ûzyÑXN¾ğ?õâ.Ãî=—àñ´DÇ¼\r›Øé\nÕó¨\roõı\nĞŸCl%ÁÍYÎû¥ß°ÏàGÑşÚ}#VĞ%ı(ÔÿÒà3æÉ˜rğ};ôû×¿GÉÌnö[ª{¥¹–“_<m4[	I¥¢À¼q°µ?ğ0cVınms„³nMõõˆ\"Nj1õw?@ì\$1¦ş>ğÒ^øÕû¥ö\\Ì{nÂ\\Ìé7Ÿ„¿ÙŸic1ïÚÿhooê·?j<GöxŸlÏù©Sèr}ÍÃÚ|\"}•÷/Ú?sç¬tIäåê¼&^ı1eóÓtãô,*'F¸ß=/Fkş,95rVâáøàÀºì‘ˆÛo9Íø/FÀ–_†~*^×ã{ĞIÆö¯ã_ƒ‚²Œ“^n„øşNŸŠ~øáÅAí¦‘d©åñşUøwäqY±åî´T¸2ÀéGä?‡&–§æô:yùè%Ÿ–Xç˜JÛCşd	Wèß~úG!†´J}›—¤úìùõÄB-Óï±;îûœhÃ*ó¼R´ìöE¶ ~âæó.«~Éçæ SAqDVxÂîÍ='íÉEÙ(^Šû¢~›ùø¿›çòéçïo7~‚M[§Qãî(³Üy¸ùnPÑ>[WX{qÔaÏ¤ÆÉı.&NÚ3]ñúHYïİûƒëÛ[¶ÁÙ&ü8?Ñ3„‹›¦¶§İ†Ú»¶á#Œ¦ÎBğe6ë…@–“[°¤£ûàĞG\rÎ+ı§}ü˜÷ÁÿÏ_İç7–|N„§«Ş4~(zÁ~“»¹ï§%›–?±ßÓÈ[¹ø1Sª]xØköÑKxO^éA€‰rZ+ºÿ»½*ÂWö¯kşwD(¹ø»R:æı\0•§íù'¤Šó“m!OĞ\näÅuè‚Æó.[ PÆ!¹²}×Ïm Ûï1pñuüâ,T©çL 	Â€0}â&PÙ¥\n€=Dÿ=¾ñĞ\rÂšA/·o@äü2ãt 6àDK³¶\0ÈÂƒq†7„l ¼ğBêŠúÌ(ƒ;[ñˆkr\r‘;#‘ÃäƒlÅ”\r³<}zb+ÔĞOñ[€WrXƒ`Z Å£†Pm'Fn ¼‰îSpß-°\0005À`d¨Ø÷P„ÁÚÇ¾·Û;²Ìn\0‚5fïP„¿EJäwûÛ ¹.?À;¶§NòŞ¥,;Æ¦Ï-[7·ŞeşÚiÅâ-“ÖîdÙ<[~”6k:&Ğ.7‡]\0ó©ûë–ù/µ59 ñÁ@eT:ç…˜¯3Ådsİú5äœ5f\0ĞPµöHB–•í°½º8JÔLS\0vI\0ˆ™Ç7DmÆa3e×í?B³ª\$´.E‹ĞfË@ªnúƒ‰bòGbÁÏq3Ÿ|üšPaËˆøÏ¯X7Tg>Â.ÚpØï™’5¸«AHÅµ’Š3Sğ,˜Á@Ô#&wµî3†ôm[ÏÀòIíÑ¥Ó^“Ì¤J1?©gTá½#ÏS±=_„‚_±	«£ÉVq/CÛ¾·İ€Î|ËôáşD ƒg>Ü„õëé 6\rŠ7}q”ÆÅ¤‹JGïB^î†\\g´İõüœ&%­Ø[ª2IxÃ¬ªñ6\03]Á3Œ{É@RUàÙMö v<å1Š¿‘¾sz±uP’5ŸªF:Òiî|À`­qÓ÷†V| »¦\nkâ}Ğ'|gd†!¨8¦ <,ëP7˜m¦»||»ÿ¶IAÓ]BB ÏFö0XÏú³	ŠDÖß`W µÁqm¦OL‘	ì¸.Í(Áp‚¼Òä¶\"!‹ıª\0âÍAïÃô‡‰ÁV€–7kƒŒM¸\$ÓN0\\Õ§ƒ\"‹f‘á Çëñ È\0uq—,Œ 5ÆãA6×pÎÎÈ\nğÎjY³7[pK°ğ4;lœ5n©Á@â\\fûĞl	¦‚MöùûPÁç3®—C HbĞŒ©¸cEpP‰ÚĞ4eooeù{\r-àš2.ÔÖ¥½ŒP50uÁ²°G}Äâ\0îËõ¨<\röœ!¸œ~Êıµ¾óñ¹\n7F®d¶ıà“œ>·Ôa¢Ù%ºc6Ô§õMÀ¥|òàd‹û·ìOÓ_¨?J„æªC0Ä>ĞÁ&7kM4ª`%fílğÎ˜B~¢wxÑÚZGéP†2¯à0ü=*pğ†@ˆBeÈ”ØÏ|2Ä\r³?q¸Ğ8í¸ë±ñÍĞŠ(·yráö 0àî>œ>ÀE?wÜ|r]Ö%AvàıÁÅä@+İXÁªAgâÉÛÿsû®CĞûAXmNÒú4\0\rÚÍ½8JİJğÇ¸DÒšó´:=	•ğó‡ëÆS™4¯ñF;	¬\\&Öè†P!6%\$iäxi4c½0Bá;62=ÚÛ1ÂùÌˆPCØåÂƒmËÍ“dpc+Ò5Šå\$/rCR†`£MQ¤6(\\á2A ¦¹\\ªŒlGòl¬\0Bq°¤P¯r²ûøBµ‰ê›Ñ‚¹_6LlË!BQ‰IÂGÀåÜØğXRbs¡]B—Hrã˜`ÎX‹ä\$på±8ğ„•	nbR,Â±…L \"ÂE%\0’aYB¦sœ…ÍD,!Æ×Ï›pN9RbG·4ÆşM¬Œt…¸œ¬jUô¤À§y\0ìİ%\$.˜iL!xÂìÒ“Å(Ä.‘)6T(’I…ìa%ÒKÈ]mÄt¥ô…ú&‚óG7ÇITMóBú\rzaÂØ])vaˆ%œ†²41TÁjÍ¹(!…¬Ş¡¨\\\\ÆWÂÜ\\t\$¤0Åæ%á”\0aK\$èTšF(YàC@‚ºHÏĞHã€nD’dÃ†Wp˜ÉhZ¯'áZC,/¡\$û¦£—J¡FB¨uÜ¬Q:Î¥ÂAö‰:-a#”ì=jb¨§lÕUg;{R°€Uº±EWnÔUa»Vâî•Nj¬§u‹GÉ*¨yÖ¹%İÒ@Åï*Ìä«ÕYxê±_ó²§z€]ë)v\"£çRÕåL¯VIvê=`›¾'ª°Uİ) S\r~R˜•™\ni”Å)5S¦åD49~Êb”;)3‡,¦9M3¯HsJkTœÃœ‡(¢†ú—uJ‰][\$uf¨íob£µ¹\n.,îYÜµ9j1'µŒ!ö1\$J¶‘gÚ¤ÕŸÄ†U0­ÓZuah£±·cH¥,ÃYt²ñKbö5—ë5–’/dY¬³AUšÒ…©‹[W>¨_Vÿ\rˆ‘*·õ©j£§-T±… zÖYÊd•c®m‡Ò¹±Ø:¹€üË[Ut-{ªµıl	£i+a)».[º•_:Ú5ähƒò­WÂ§Ém»¥%JI‘´[T«h>š®µ·°•™;ËXÌºdêÂŸS›d‰Væ;\rÆ±!Nˆ“K&—AˆJu4B…ÁdgÎ¢.Vp¢ámb‹…)ÇV!U\0Gä¸¨“`‹Ğ­\\…qâŸ7Qöb«VL¥Ş:äÕ‚úƒó¬Z.­Nò˜Ä*–ÔU]Z´læzë…Îöù®ÇR D1IŸåÂ£Ñr:\0<1~;#ÀJbà¦ÊM˜yİ+™Û”/\"Ï›j<3æ#“–ÌŒêñ¡…:P.}êe÷ïòD\"qÙyJıGŒû·sopŒ¯²şXŒ\rİ³d–Ş\rxJ%–í‰ÏÆ¼O:%yyãÅ,‡”%{Î3<îXÃ¸ÏÌ÷¯zÂEÎz(\0 €D_÷½Ÿ.2+Ög®bºcÚxìpgŞ¨Áß|9CPûî˜48U	Q§/Aq®İQ¼(4 7e\$D“‰v:ŒV¡b×ûN4[ùˆiv°Àê2ñ\r•X1¼˜AJ(<PlFĞ\0¾¨€\\zİ)ÑçšW€(ü4ôÈÃÚï¢ p•™ÓõÊ`µÇ\r³da6”¯üOÖímña´}qÅ`ÂÀ6Pƒ'hàç3§|š’îÃf jÈÿAæƒz‰ø£+ŒDŒUWøDíşŞ5ÅÄ%#é°x“3{«¶L\r-Í™]:jd×P	jüf½q:Z÷\"sadÒ)óGØ3	¤+ğŠr„NKö1Qş½ç†x=>û\"¤°-á:ÊFÍõœIÙƒ*í@ÔŸÇy»Tí\\Uè¨ãŠY~ÂŠ‰äâš‚3Då€Á™ã¨f,s¢8HV¯'Ét9v(:ÖB9ñ\\Zš¡…(‘&‚E8¯ƒÍW\$X\0»\nŒ9«WBÀ’bÁÃ66j9Ğ âÊˆ„ƒ?,š¬| ùa¾g1²\nPs \0@%#K„¸€ \r\0Å§\0çˆÀ0ä?ÀÅ¡,ä\0ÔhµÑh€\08\0l\0Ö-ÜZ±jbàÅ¬\0p\0Ş-Ùf`ql¢ä€0\0i-Ü\\ps¢è€7‹e\"-ZğlbßEÑ,ä\0ÈÌ]P ¢ÚE¶‹b\0Ú/,Zğà\rÀ\0000‹[f-@\rÓ¯EÚ‹Ï/„Z8½‘~\"ÚÅÚ‹­ö.^ÒÎQw€ÅÏ‹‚\0Ö/t_È¼ÀâèEğ‹Ö\0æ0d]µ€búÅ¤‹|\0ÈÄ\\Ø¼‚¢íE¤\0af0tZÀÑnJô\0l\0Î0L^˜´Qj@ÅáŒJˆ´^¸¹q#F(Œ1º/ì[µ1Š¢ãÆŒIæ.Ü^8»\0[ŒqØÌ[Ã‘l\"åÆ Œ€\0æ0,dè¶À€Æ\rŒÌ„cøµ{cEÁ\0oâ0¬]°\0\rc%ÅÛ‹—ğˆ8½w¢åÆZ‹µ-Ä\\ºñ{ãÅÖ‹Gª/\\bp„…@1Æ\0a²1ù‹ÈÏÑsã!Å¨Œ/î/Ì]8¹‘~c\"ÅÛ‹Åş2ôcÎ‘m£\"€9Œqš/\\^fQ~cÆ_‹£Î-\$i\"Ö\0003ŒË¬¤fXºqx#\09Œ—Z.´i¸ÈŒ@FˆŒ‰3tZHÉ \rcK€b\0j’/DjøÉ1¨ââÆIh´aÈñv€Æ©OZ4œZòÌÑ‚#YE¨\0i–.hHÒÑsX/F<‹Ï†.äjøËñ­bèÆÍ\0mV/d\\èØñ‹b÷E³‹£3T^(İÑˆcKFR‹Õù‚ô]X¶q½¢øÅà—’6Ô]hÓñc6EÄ‹ó66Üh‘Ÿãn\0005sn/dn¸Ô`\r\"ÑFŒ³Ú-D`ÈÕ‘‹ãN€2‹Y”¤bxÀñ”#\\Åë‹‡V3x·1x€FxŒ¾\0Ê6Œb°q£ƒÇ!8|^‚ÌÑubåÆàÕ-ôrØäq¼ã:Æé%ö0Œppñ”#Ç‹¢\0Æ6ÔfÕÑÇ¢âÅ¬dÒ0„qH´±¾£\$Ç@‹qò-¼^B4±¦\"ú\081ª/lnxÏ‘ âêG3:0tjhÒ~@Æ¼¥¦3¤vHÆñ¹bÜG(e„4gØºqÂã2Æ1ŒÉ-ŒnXËñº\"ãF<Q1\\j¸¸1®ãÈEÇ‹Çä³4m¨Õñªã[ô‹nÁz7üyhŞ1§#ÆŞ/‚3\\xĞqÍKG‚ŒÿÆ6äo˜Ñ1{£°FJ×š6¼lXéqâ£„Æu©Ş9œr(¿1Òã‡Gc\0Åf:„rX½ #ĞÅ½\0iŞ<\\}×ñåbîF½\0sÖ7Üy2ÌÑæ#uFe›\">4iØÅ¿âÔÆçŒé\n<{¸ã‘£âÆ‰ŒJ;¬]ØÄ1Å#ÎÆ0ÙJ;4^èÂD½ãóÇ®‹Ÿ¨³4i¨À(H#ÚÆEŒx–/¤nøû1ğã/Ç¡‹åj6,l˜Û1tã/\0005%ï0„]xü‘¶£GG5!’0¤€¨×ñÚâé–rŒq¢2Ì¨Ş‘ÎãNFPo\"4ô_˜·1×dÇ%‹e ²3¬s8é‘üã†G5“ æ6Ô[Hë“cØHjYš;ô[è¾‘˜bë! yò@Ä\\¸½qØ#WHN‡;ÌcÆQèã:Ç-%ª.œkXÆ‘ı£ÚGÍŒÏ†1Df¨ß‘ºcWFl¡!‚0ü€™²c EÜ©;l˜Ñq\"ëF©ß¢7\\\\¨ùñâ£ÔÆO‹qş.T|\"?‘ñã™ÆE³f9TyYÑ©ãSG1ûÂA\$f9R\n\"ŞÆxŒ¹>Bœ…HÚñß¤\0ÇŒ¶:\$e¹1œ£³F?=º3Tu)\nq¹béÇ~ËÎ<TøÎ±Ğc‰H.‘m~CôwHÊ±¸#/ÈI]~3ä^ˆºÑ„#§Æ>‘Y®4Œ^¸ÎQjcÊÇKŒ1\"Ò8¬|6Ñåc\"ÇB‘µ\"b4ãèæ%œ¢ÔÈG\0e\"’/t‹¨´1r£1Æe!v2„yÀ±õä<Ç †8\\o¨ÊÑ’#tÅÑ\rz@´}HÂ‘èbïÆèy î1Ì\\¨ğëdeGÁZ3Œ~ér)ã1È¿‹Û†Bl~H½²:£dF£‘-Î?”k8´qèc(FÍ‹ŠKŞ5|myñ€c1Æ<’*@´jØáò1ãÛÅ¾Œ‹>I´ZèÍQjä•È2ŒÉ\$0¤‹hµQˆäVFTŒ	\$ÆAl~öqÚ£È±\$Ö>\\pÙ\rq‚\$/Èu%ï!®Jq \$ ãtE²‹GN-Tq)ò\"¢ÛHÊŒË¦=ì–XÉ2-£H’«š8\\nˆµRW\$HŒë\"¢C\\_¹\0»d\$Çf‘³\".D„u	'Q£zEíŒÙ&0toˆóqjãúÆ¿Œ³R@d—øÉä£ùÇu##¶LLkÉ*qó\$*GÄ‘iÎ@TŠi‘lãòEª‘ƒÎ5Œ˜¾r\\d–I–‘µ\"/ÌZÉ0’j\$TÅşŒz5Ld3’£ëÉ’oÂ.Tq¹!1{£Æ‹åÖ9œZ¸¾QÕbÓFŒwJ94nˆÒÄÖä{É(“-8·2h¤uÈé“;\$†-Dkøårs£‡H™#¡‚ôY7ò\"Ø/E¿’Ó 	\$j¢^ò-£]Ç7[\"N\$’èÂ‘“¤WÈ‘¯Ö/]à\$²+€1Ga/&IDnøÂ’@\$åÆ!‹ç\$Î-Œk!Q¨âùÊ)(N/\$t¸İ¹äëÆOKzP´tXÜò[\0’G’w(*K\$vˆË1ócÉ'“ŞGÌIòxd­È\n“AÒ8\\rX·Òa£÷I”iNœI%\$½ã’Æ_‘÷ª6¤fçQş#–ÈI”5#F´—ØºñÏ#³Eâ’•\"î3\$¢IÜc‡Hˆ‹İvR|ùQ€¤cE¸ñ:R„eº±hä¶EÎfK`8şr.#·E³s®0L…˜üRä†F©‹·!\nC\$`Èöñ´\$ôH?’ËnPÜe™!ñš¥@F'”¿–/œ‡¸¶ÄÖäÿÊ”¯%ÂN,hÈÌrF\$öÈşŒÇ3´tøæÒ€¥Åæ’!1<„ÉCQÏ%ÉÃ’¹æJäZØf.İ6Å†œ·±C‰¥ÊÔœ.²[ş™BÒ¿xëàƒè\0NRn`šÈùY\n’%+N¨IMs:Ã¹Ydƒef¬B[¶°İnÆ¹YŠòm¨ÁR®×’ûÉY¯ÚC„XŒëÛj³çU+Vk,¯\0Pëıb@e²¹¥x¬„V¾ºyT¤7ˆuî«[Jï•È±\nD¯§eR¿¬mx&°lÀ\0)Œ}ÚJ¼,\0„IØZÆµ\$k!µ¨ñYb²Áœ°€RÂ‡e/Q¾Àk°5.Áe‘­5•À¨W‘`ª¥\0)€Yv\"VÂ\0•Ã\n‡%—å–`Yn¯Õ¡aôÔxÃ†Q!,õ`\"‰	_.Ÿå©Æ–tm\$•\"“²J«¤ÖÀ§vÆ%‰M9j‚°	æ–§Ä*³KpÖ”’;\\R ¼ü3(§õŠ^¯:}–Èï|>Âµa-'U%w*‰#>¤@Ì¬e–Jÿ¤;Pw/+¹á5E\rjn¡ĞÃd–ô¢^[ú¯§cÎ°¥uËz\\Ø1mi\"x‚„påÃ;£ÌîˆæˆP)äøªÇ#„±Ø’¡…Ë!Aª;¨ß	4ì³a{`aV{KUàÊ8ã¨Ÿ0''o€2ˆ¨¢ycÌ¸9]Ké@ºÒ—^ğlBˆâOrëÔã,du¤¾8¤?õ‰€Õ%¼gB»ˆî‚ÆYn+ã%c¬e\0Œ°ñà¤±Yr@fì‹(]Ö¼¨\nbizîÖn€SS2£ÁGdBPjŠ¹Ö@€(—È¥¦!à-çv²´eÚ*c\0„ª4Jæç‚’ùÕÙ,“UÈ	dºÉeğj'TˆH]ÔŠÔG!œ)u‹ÕÖ¯Ÿ•Ò¯ùZËB5ûÌ“W‰0\n±á¡ÔR«ÁW…\\¦Q jÄ^rÊ%lÌ˜3,ÒYy×Éf3&Ì•ÜÕQ:Ïµ2„mÉR)”T€¾(KRÁ 0ªÊ”@«ìY´¢Y:£Ùe3\r%´¨°Tö%­X”Á¹‡STÔ.J\\ë0ÙhôÄ…ŠD!Ä:—uæêÉU\"¾ÅÁo+7–\"„µ“f'º­R\0°‘ŞJõ2S–2è#nm »ÁIåŠœı\"Xü³²[Ö€Ñì} J¨¯c¼9p0ªüÕQ»(U\0£xDEW‚Œ.LõÁ=<BÔ0+½)ZS V;â\\âµI{5I‘AôÖÃ,dW²uè5Ew\n\$%Ò…ˆ½2i_\$ÈÙ+ìæO,Œ¬‡íX‹´Õ‘Jg&J¡úG’º%\\J“·b.Äİ^L‹TòFlŒè–¹]k#f@L·G€ÄT¼Ù—ÒÍHÏÌ\"–q1SÌ°ù‰jVÉ(Î™„ìZVzßÅ†³,§ÊèG.1Fû±gNÊ;×1ÃŠV¬¦5EÍò5`ò\0Ctè=F\ná¹›Î±•K‡ş™Ö\0­ÛŠ±%¨ËD]Q\$\r\0‡3J\\,Í™š³<T4*£™Á.ÒYK²D«QƒéLïS%,ŠgÔÇåª§Ö<Ëë™u0–ôÍUÄ‰Ö*x(©åNÂ’Yv!ş¥yÍ	wÅ4fdª¥rG•‰M \$äê‰^;ºéîİæˆ)<Pã]DÒ%%Ó;ÔjÊåšI0æaÓu^Jp—[)¦v©3RhRúEöÀ\næ–L_š#5|Ü¾Õm3Pñ*¨\\Y51X’’	i³N—Èñ\$\"°ºaü­õh*KUİÌïV8¨åuò±%&„ræ¯Ëš ²5oŒÕçg³;İrMl[Æ¨ögœ³ùª’·UÍq™ê¹šh|ÔeO2·f MlW2AP„×¹˜’ÍÀÍv~eD¬eñ3UÓ«l‡E62iüÎõìÓUbÌï˜¬«õUŒ¬©¨îøıªVğêiI!\$i¨Ê­&Z:½–xm!Å†“.ÖOÍfwÒ¯!”ÌÓkİ¤Íƒ™6b\"«I™J]]:T™6ÒVrú¹}’ÜÇ«]™®±‘U¢	ys7fÔMÅ™ÿ3ˆŒÜÎYœó:T_MÍw%3ÆnÏ¥\nÎæz*™í3âhƒ·	»`U–²Lÿš‡,¥Û„Ğ5¨óvfƒ»Ã›Ù42_Q‰¼hİÇÍuD§\no£¹)¤ÄœÕ«M9¿7foÛ¼©¤rÖİÇÎWB~iTİeyQTâN\nšd¦pr§#›óM§;’˜…4æpª¼„têÿ–(;š›³5	|¬àÇ‚Š­',AV7Ü”ÔåUAö&ìÍRœP¯\"äÕy‡Ò·•‰) [ŠnÌÕñ-3V•Ë,?œs6ºpŠù†3fµÎAšÛ9k|İÉ®S†f¬*@œ•5Şg¼¾É¿2·Í}œŒ®şUüİ™‘ğùæHÎF›l%®pÂ«Ie³be—MÙSO\r[¼æi²3fÉÎLVá®rÙu®Š¾¥ÛNA›:î%r„Úy3Q_Ì¸›W.ÑÕÈ^Sl@&ÌÁ5ÖYlÂÌ1åæÎ}VxêgÊ…§^SnÕÌÍQ!:5×ZŞiZCÔˆ:¿›•3qgé%Dáõİª{U¡3’tZ¹`ûÓu%w:ÉZQ:QìÏÇW fî‡í›¿9Jplê)Ö3xÔvÌşK7b#«ù½«çX+Jš(¢Âh´ìP*Ó´«Î›ş¢!×”ìÅSLçh*'¤¨\npBù™ÚªgNÊ§8BuÒªéÂ¯çÎŒ½8niêˆIÍs¸USÍIš‡;vvÚ³UõsR•7Nu×8©H|íéÅÓ·§Ìœ«8òq´ÕÙŞ+'ÑßÍ`œx¢9Rˆ	Õ®ºçMaR8úxä)¸'!Ïœ;±U¬×YÖ“’İsNIg:ÕKTëy¯3®gÍYìëÊkäãÉÜ³n'LO(œ¿3šw4ñ4î»¦ÇÏœÚêşl¬ñÎJ½–ªw½9İ\\ìç•óóhf(¢_~ìòà}9Nö¦Õ\0–´åb\"¢Yé¤ƒTh,Ú¤@ú±D¡û€\$€I·;eüèUÊn¨³·,¹OªÆ	Xÿg´-ÀÉ+>ti'G‚ölª%\0­8âVBËU1«ye\0KTÆ4ûÁÈm’ºV2)\r]I/\rFù…ÔXˆ×Àß¨ña·­GŠÂ¹ò*ˆ§»ÿ>ERì÷ğî®¥‡ÑZ›-)I\$®¹íç:¦aË\0¾FybaÙg«w§­(ß_@§v}öiõÊ³î€S^Ë25DÔ³Ğ	ÈôURO±ŸJHÖ\\ØisğfÆËKšN±€qi÷Sg×OÂŸ\n²F~|«µÏ*@gR€_Q<9sÜ¬3i+Ø—².Cw²²ê|‚øyË6aìOÜY9¶Œ¶É–\nëÔ½-([®±†_ˆ}íSû]c¤S=Â¤ÎÙşÎÍÔYÎàU-> <ú©µ\n<ÖsOôQ4F¦^}\0007uäk(/‹ŸÛ/5{Lÿ9µ\0§¬Ğ &³Š[<ÏõŸsÛ\0&Íè#…@hÌéª3©V}ĞH¢Š*Üw+]'DĞ& @§Ö])µè;TGe3\\Îên®ÑßËd\$:¦uN4Åyktê-dR!7–­Ée4(P!•Ÿ-ş9À4ç_PMGbÄ±w…«ØÉ6O§S¦F‚âí)§Šyh0+€²§qT|·Š+uÔÿÎ+ A¬?òŞ	öTè3.q 41T´¸e›€\n:P ø¯–{Tî\n³ëh?«šTïAùS£­*«åÒ+åu¥>ú\\ê¾ZéíÊîYì·¢wEJö%·’s—L±¾dªšyÀ+\rCèœß¡'Añl,Òyå3şç²ËÍ—`º	_*ÑPû ThKDV²·–~5	à0´+á¼,š-?­]œºò3ëÖKå—`¯^†¸¤I42(]ªw.æ†rÄÊËê]¬\nYÆ¨B†£­Ğ	³í–}Ğ‹R ¾ÉgØ}:H§ğJÄWP²ê„\"Şµ—ğôV\\¬<——? >½å—áÿ§Ü¬İ†¿=¦…:Ÿ\n0×è\\+ñS–´æfİUŒ³í‰U,…WCÖˆè•On¨òÎ…¢§.†e9|R÷I'©[×/º²ÄÙü2ù›«QÓBn:ÆIõ\nö§g¼9Æ\rü,ÓR6³ıçÒQ\$Xİ+¸>–©±`\nù)/_8QiÔùµê—=‡êv?5v\0 \n¨çÉLG¥Dmˆw\\ëFÖŒ‡Ñ¢¯ÁdêŸµ}s‰\"‘ÃYv¤|â™J*´9h­¡Ñ@XEUÑ*Ş(oQ]\$Bˆ,ûéÜƒ•KTœv¤AptCÉƒ\n×C,/˜<¡­Ú™EW‹-VïP¡¢=Wÿ*%Kê—-Q`9	(Êú59Ó€èm)ËX¸¨@ç2ø ıT@ˆÛ\nS–¯‘bd×EÎ´a€+€DXîá|UÚ	‹	’¡F® 2ú%5\nj•m«€WÙ+xêKŒæVÌ3#„¶CTÃek¤™–&Î,£l¬jbd7)Ó“\"\n+ìPüºb’èIŠ@è3Ñ•ÜµjUÒÌEsŞÔ)D¢fë’ƒõŠû•ÇPZ3AÎŒÕ\nwThğ—²ªÛ˜Å4Zäª<Êuß©ßdqâËŠu(÷“bKG±à¥éÀnÓTï®ˆ]z¨f%#3IËfS¨®&}µ@D†@++ù¤Aíhª¿\nªï€U—Ş¥|B¡;”…UmÑÙU…E•N¥!ôx2±1Ò\0§GmvH~õÁHèTê)öW®³YNı\"åk5©ÑvT#=µÚ¥Ê<\n}‘#R3YƒHÅRÍIÍ³Ü¦;ÌÑRl£1léuB%TQJî™*ºêˆÙ'ºEë0i¬dw,¥zÊÍ¥:\$†¦;Í? üîj‘¿)§ô)ÔÊ\$32J}Å&‡[³\$¨õÌ¤;DnıE×´À+0ÛaZ{¨èC èû€(¤ê:“¸ ÚO@hø²D£æ\0¡‰`PTou“³ÄïF®\rQv‚û¨˜o½Ü¡\$Sîö+˜Ò#7À¤Izr…pk DW”ˆFsÍ9™ Qê  Ğ°1€gÀÅ#•\0\\Là\$Ø 3€g©Xyôy œ-3h›ÀşÃ!†nXèô]+±—	É€c\0È\0¼bØÅ\0\r‰ü‡-{\0ºQ(ğQÔ\$s€0…ºém(°[RuòVÆ÷ÒØ>Æ¼+àJ[©6à‘ÒàJ\0Ö—ú\\´¶ã,Òé‚Kš3ı.ê]a_\0RòJ Æ—`š^Ô¶ClRÛIKî–ù\n \$®nÅÒä¥ïKj–©\n€šÁ©~/¥ªmn˜].ª`ô¿ijÒâ¦#K¾˜f:`\0…éŒ€6¦7Kâ–¨zcôÂ\0’Òõ¦/K®–­/ªdôÄé‡FE\0aL˜¤dZ`ƒJé†S‘ÏÊ™…2ØÍ4Î@/Æ(Œ‹Lò™õ0ª`´Ä©†€_Lş™]4ZhôĞ©šSD¦M˜…4:cÑé‹SR¥×M—E4šiò€éSG¦EMj˜å4zdÔÕ©–SFKLª›%4ªeÔÏ%\$ÓlKM2–õ1ÈÚ”Ôi¦Ó©MV›­.¸Ú”Öi´Ó©Lz›/ˆ÷ôÛ£Ó„¦ÑMæ›,`Š_ôàimSŠ¦gMÆœ€jg‘òéÇÓ5¦9.›…9j_òéºS¥µ.›Å9ê_±òé¾Sˆ¦‹.œ7Úrò)ÉÓ%§[2m8ºuTæé™S±§3M:]3ºq”èänÓ±§KNˆ1|^ÒktÏ\"ÒÓH§gKj-;zcñiÎÓš§–\r<ê_²-iÊÓ¸¥ñ\"ÖU.¹´óiëRÚ‘kOFí=:\\ôÏ\$ZÓ©§MLE­5úxôø©ÂÓ»_\"Öœ=<\0ñtéÙSç¦9OÒ­1Š~”öi²Óô§¹Oêí>ê~qœ)òF¸¨’ =6:~ÔõãJÔ‘ÏP:ŸÍ=¨åTÿ)¢Æ«§ÿPJ8õ@êwôô©÷Ç*§ÍOÊ5]>ªt÷£•T\n§å!\" 6Y	)€ÈH¨/Pª…3É	éğ†/‘P~ àù	ªÓ®¨!\"ŸC’ÌÔıj¡ ¨eNJ¡üˆêˆñÔ*%Ô4¦1Q¡ÅCZ‡Q‘jTBQ.¢\rE)\0004Ëê\$€2¨SM+å<j„t¿j0Ô,¦9Q†¡}F\0\$±s©Ta¨KÎ£]Ecj*€'K»M¾—MGx½ÕRÇT1¦#Qê¡¥GªŠ5ª:Ôz¨Lš¡4u6z•\"j\"TˆKuNÖ£ıGÚg\$jFSÜ¨ïQ2¤¥Høîµ\"êMTƒ©%R¤•HzÕ\$ª,Ôw¨Re.\$rªzµ)©ÛÔ¦©-Qö ÍJ„¹‘Êª@Ô°©=R&/IÊ•1†*]T³‹À7¼˜¾QÒåD&Ó©qN¦_(´q²c[TwŒQRôå´œJš\0nâ÷T­¨û.¦˜956cÔÜŒÕSz¥H˜Á•7ªRÔ}Sr8¥NŠšÕ\"bÖTè§ÁQŞ5MNŠ–õ#ãçÔè©ESÂ§-H˜Á7\"ÜTü©_Sê§}GØÌ•?*yÔ©‹‡Sò§½P*Ÿ5#âöÔÜÏT:§]PÊŸõC*€Ô‰‹T:¨-K8Æ5Cª„ÕªR¦--MÈ¾•HªˆÕ ª'T‚¨­HøËõHªŒÔÑ‹×TŠ¨íRª£õ,âéÔÜ‹GTÚ©-SJ¤õM*”Ô©‹UTÚ©mMH¸õMª˜Õ>ªgSD³5MÈÂ•RªœÕHªwU\"©íK8ÕÕRª ÔÚŒ¡U*ª-U*¨ànÂ¾TÙIR­,t¢Z«ÕêY¶IUF«51ª¬µW)vÕk‹_KÆ«pJ«5Zj­Å¯©R4r\n¬^jIÓCKº„‚ª}UÊ“_ª°Ô›ªãO¬=N·R*¯F-ª½R¬%Wš‹Õcê¦Õ\\aV>«EYj–µdªªÔÃ«UÎ¬µWXÍ5*ÈÕ‹’¹Uy‚õZŠ°1kã™Õ¨«7Vš¬R\\HÍ5h*ÖU¢©ÏUÆ§M[Š²±kêvÕ¸«3Vò­}[(ä5WªzÕ¸«iB­Oº®1¯ê¯Tı«—V®;­[øîµpRæGu«;T@0>\0‚ê/I³ªÿW`í]¦ô\0ªîÆ8«¿PŠ¯]ÈÍ1m*ïÕÇyUz¨mW¡õ|ªİ“[«¡Ö¯…]J¬ÑˆêøU±««ö¯…Z*¤5\\j‘Ö«ëZªô`ZÁ5~ª®Eì¬Wú«4ZšÁ5h£QÕ^‹cXZ®•Sú®1o«Vª¹U&«TºÄ5}cU^›Xš°dm*³±’kUu¥«SfG=[¹õjäsÕ¿‘ÏX¦Kc\n®iRâHç«i#±uWt»µª½¥º«»XÂÕcÄ¹•«U†¬”rÚ¢õUZ‹Õ‡ƒNE¢¬‘Xº¬…4ÚÈudê·Eä¬eV^²íKÉànâòV8‹sXÂ¥ÍfÇõ/ÂhJ³-J]Ó‚…™ÓÎÁÕzO›±<Eh‰\$å‹“·¡ó\0Kœë<bw„ñ…>·”øN\")]b£	â+zê.cS.¢iFç	ã£µQNQ«éV*ªéÛÎúŞO[X¤nxŠ¤P	k­§oNø£}<aOò§Iß“Áh·ºšT;òrñ‰‰¤ƒVD6Qß;zŠ]j×~'’:ë–[Ivôó7^Ê‘§ÖÁjëºw[«ùæîºçœÊÅ†¥:u ÅDs#¦¿Î\\wµ<n|*á‰hëmÎKv;YÒˆ±Ú3á]Œ«^#—Zªj¥gy³jÄ§Y,”%;3¾³ÊÚù×.ÈW\"‘Ã\$Ù3>gÚœºÏÓÏ¦ªVTóZj¥hYİjkD*!šh&XzËiª•¥+GV—­\"¥æ¸Z:Ò¤§+‡NoG¥Zjj¥iÉ]ÊkOĞ_­Ö¬ÔmjIª•¨§t¯–#½[âj\rnŠãê©×Ğn™ßZ¥_,Õé†ógÎÄš©:¹¼Å9‰Áÿ«[L2®W=TÔ×0®ãf¶\0P®U6\ns%7isYæ?£¿uá3¾’½nb5¡«Ÿ»šX|G~l•&×k¤¥·M§ †¯ú¶ŒÏy¡S–É)Î]œÜ­r·¶Ù¸µ¸æìÖê›Å?Õ}u'n0W-Î¹®æb·´ÇªìõŸk?»vQı7…Ü}p\nìõÀ’ÍÙ®Z*»9)Êá5Ş•ZW­-ZB¸²Œ:ìõã«ŠW\0WZfp•GpõîÍÙ®:Fpú¤ŠäUÙëSN/™Ï\\©Ü%s9¬S{§ ×8®ÏZÍasÊÛ“’+¢N^®“9™MÕ{…P5Óç ×Q®ÔîJº¢«y§õÕè;œÚîz¸ƒÂÕYÚV Ä3—:ïœDÅIŠÃ+ç‡ı¯£19M;º¥Œ’ô¨“V´®š\rQ{êÉÕ®•¶Å+£ƒFCLÄ¹ŠN¥–©Ôˆ\\ùŞ)\$iŒÛN'\0¦°PŠÂšõÊÇ]XÌ^s1òf&Š\"'<OøóšÌ¡ËL\0¹\"‡@Ö”¥%ä6úÂUAõ1ıi(zÌèİ€\rÒÕ‚ä±ÈbZÀ”+IQOï3€ºË\r=*Ä‰ ‰)ñ¨!Á Ğ`ª¼h°ˆ,Ğ«mGPCËA Ù²íƒA„Œ(ZÅ°%ƒtì,h/Á‰ˆi–Èk¬«¡XEJ6ğ±„IDèÈ¬\"›\nïaU- ›«\nvy°_€ÄÂÂ›Ú«¯k	a½B<ÇVÂƒÛD»/P»ôaîÁ)9Lã¶(Z‚°8êvvÃ¹Øk	§oĞZXkäÑå§|´&°.Âæ±C¹’Øá°`€1€]7&Ä™+™H¤CBcX“B7xXó|1“€0¦ãaš6š°ubpJLÇ…–(·š÷mbl8I¶*Rö—@tk0€—¡¯ÅxXÛÁÓ;ÁÅ al]4s°t¿íÅªğ0§c‡'´ælß`8MŒ8‘ÀÃ€D4w`p?@706gÌˆ~K±\r‚Û “P´…Ùbh€\"&¯\nìq‘PDÈĞÎó\$Ğ(Í0QP<÷°àÀã¬Q!X´…xúÔ5€ˆR·`w/2°2#ŠÀ¸ `¬»‘1†/ˆÜ\r¡Ö:Â²–±¢£B7öV7ZŒ›gMYúH3È „ÙbÎ	ZÁÓJÅöGâwÙgl^Æ-‘R-!Íl“7Ì²Lõ†Æ°<1 íQC/Õ²h¼à)ÏW6C	÷*dˆş6]VK!mì…ØÜã€05G\$–R˜µ4¯±=Cw&[æ«YP²›dÉš³')VK,¨5eÈ\rŞÊè†K+ï1„X)bÛe)ÄâuF2A#EÑ&g~‘e¡y’fp5¨lYl²Ôœ5õƒö¿Ö\nÂŠÙm}`‚(¬M Pl9Yÿfø±ıÖ]€Vl-4Ã©¦«ÂÁ>`À•/û³fPE™i‹\0k™vÆ\0ßfhS0±&ÍÂ¦lÍ¼¢#fuåÌû5	i%ÿ:Fd€ö9™Ø€G<ä	{ö}ìÂs[7\0á¬Î3íft:+.È”–p >ØÕ±£@!Pas6q,À³—1bÇ¬Å‹ãZK°ê±Ü-ú“ar`•?RxXÁé‘¡ÏVïú˜#Ä¤ÔzÂ; ÀD€•¾H²Á1¥’6D`şYê`÷RÅPÖ‹>-Æ!\$Ùù³ì×~Ï€ĞÅà`>Ùï³õhÔ0ô1†À¬–&\0Ãh—ëûI–wlûZ„\$“\\\r¡8¶~,\nºo_áÀB2D´–ƒa1ê³àÇ©=¢v<ÏkF´p``”kBF¶6 ÄÖ²—hÆÉT TÖ	‡@?drÑå‰€JÀH@1°G´dnÁÒw‡Æ%äÚJGšÒ0bğTf]m(Øk´qg\\í½ó¸–¬ë°ê ÈÑˆ3vk'ı^d´¨AXÿ™~ÇW™VsÂ*¼Ê±æd´ûM À¬@?²ÄÓ}§6\\–m9<Î±i”İ§›ˆÔ¬h½^s}æ-¦[Kœs±qãbÎÓ-“öOORm8\$ŞywÄì##°Œ@â·\0ôÒØ¤ 5F7ö¨ƒ X\nÓÀ|JË/-S™W!fÇ† 0¶,w½¨D4Ù¡RU¥T´’îÕğZXÇ=í`‰W\$@âÔ¥(‹XG§‹ÒŠµ—a>Ö*ûY¶²ˆ\n³ü\nŒìš!«[mjœµŠ0,mu¬W@ FXúÚÎòğü=­ (¦ı­b¿ı<!\n\"”ª83Ã'¦‚(R™İ\n>”ù@¨W¦r!L£HÅkÌ\rˆE\nWÆŞ\r¢‚'FHœ\$£‹ääÀm„È=ÔÛ¥{LY—…&ÑÜ£_\0Æüİ#¢ä”€[„9\0¤\"ÔÒ@8ÄiKª¹ö0Ùl‰ÑĞp\ngî‚Û'qbF–Øyá«cl@9Û(#JU«İ²ƒ{io­‘¥.{ÔÍ³4ŞVÍŠVnFÉxğÑüzÎ QàŞ\$kSa~Ê¨0s@£À«%…y@•À5H†NÎÍ¦´@†x’#	Ü« /\\¥Ö?<hÚ‚ù…¼ITŒ :3Ã\n%—¸");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$f;return$f;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$ie=substr($u,-1);return
str_replace($ie.$ie,$ie,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($gg,$Vc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($gg)){foreach($X
as$Yd=>$W){unset($gg[$y][$Yd]);if(is_array($W)){$gg[$y][stripslashes($Yd)]=$W;$gg[]=&$gg[$y][stripslashes($Yd)];}else$gg[$y][stripslashes($Yd)]=($Vc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Na=false){static$ei=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Na?array_flip($ei):$ei));}function
min_version($Ki,$ve="",$g=null){global$f;if(!$g)$g=$f;$ah=$g->server_info;if($ve&&preg_match('~([\d.]+)-MariaDB~',$ah,$B)){$ah=$B[1];$Ki=$ve;}return(version_compare($ah,$Ki)>=0);}function
charset($f){return(min_version("5.5.3",0,$f)?"utf8mb4":"utf8");}function
script($jh,$di="\n"){return"<script".nonce().">$jh</script>$di";}function
script_src($zi){return"<script src='".h($zi)."'".nonce()."></script>\n";}function
nonce(){return' nonce="'.get_nonce().'"';}function
target_blank(){return' target="_blank" rel="noreferrer noopener"';}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$eb,$fe="",$jf="",$jb="",$ge=""){$I="<input type='checkbox' name='$C' value='".h($Y)."'".($eb?" checked":"").($ge?" aria-labelledby='$ge'":"").">".($jf?script("qsl('input').onclick = function () { $jf };",""):"");return($fe!=""||$jb?"<label".($jb?" class='$jb'":"").">$I".h($fe)."</label>":$I);}function
optionlist($pf,$Vg=null,$Ci=false){$I="";foreach($pf
as$Yd=>$W){$qf=array($Yd=>$W);if(is_array($W)){$I.='<optgroup label="'.h($Yd).'">';$qf=$W;}foreach($qf
as$y=>$X)$I.='<option'.($Ci||is_string($y)?' value="'.h($y).'"':'').(($Ci||is_string($y)?(string)$y:$X)===$Vg?' selected':'').'>'.h($X);if(is_array($W))$I.='</optgroup>';}return$I;}function
html_select($C,$pf,$Y="",$if=true,$ge=""){if($if)return"<select name='".h($C)."'".($ge?" aria-labelledby='$ge'":"").">".optionlist($pf,$Y)."</select>".(is_string($if)?script("qsl('select').onchange = function () { $if };",""):"");$I="";foreach($pf
as$y=>$X)$I.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$I;}function
select_input($Ja,$pf,$Y="",$if="",$Sf=""){$Ih=($pf?"select":"input");return"<$Ih$Ja".($pf?"><option value=''>$Sf".optionlist($pf,$Y,true)."</select>":" size='10' value='".h($Y)."' placeholder='$Sf'>").($if?script("qsl('$Ih').onchange = $if;",""):"");}function
confirm($Ee="",$Wg="qsl('input')"){return
script("$Wg.onclick = function () { return confirm('".($Ee?js_escape($Ee):'Opravdu?')."'); };","");}function
print_fieldset($t,$ne,$Ni=false){echo"<fieldset><legend>","<a href='#fieldset-$t'>$ne</a>",script("qsl('a').onclick = partial(toggle, 'fieldset-$t');",""),"</legend>","<div id='fieldset-$t'".($Ni?"":" class='hidden'").">\n";}function
bold($Va,$jb=""){return($Va?" class='active $jb'":($jb?" class='$jb'":""));}function
odd($I=' class="odd"'){static$s=0;if(!$I)$s=-1;return($s++%2?$I:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Wc=true;if($Wc)echo"{";if($y!=""){echo($Wc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Wc=false;}else{echo"\n}\n";$Wc=true;}}function
ini_bool($Kd){$X=ini_get($Kd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
set_password($Ji,$N,$V,$F){$_SESSION["pwds"][$Ji][$N][$V]=($_COOKIE["adminer_key"]&&is_string($F)?array(encrypt_string($F,$_COOKIE["adminer_key"])):$F);}function
get_password(){$I=get_session("pwds");if(is_array($I))$I=($_COOKIE["adminer_key"]?decrypt_string($I[0],$_COOKIE["adminer_key"]):false);return$I;}function
q($Q){global$f;return$f->quote($Q);}function
get_vals($G,$d=0){global$f;$I=array();$H=$f->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$d];}return$I;}function
get_key_vals($G,$g=null,$Rh=0,$dh=true){global$f;if(!is_object($g))$g=$f;$I=array();$g->timeout=$Rh;$H=$g->query($G);$g->timeout=0;if(is_object($H)){while($J=$H->fetch_row()){if($dh)$I[$J[0]]=$J[1];else$I[]=$J[0];}}return$I;}function
get_rows($G,$g=null,$m="<p class='error'>"){global$f;$xb=(is_object($g)?$g:$f);$I=array();$H=$xb->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!is_object($g)&&$m&&defined("PAGE_HEADER"))echo$m.error()."\n";return$I;}function
unique_array($J,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$I=array();foreach($v["columns"]as$y){if(!isset($J[$y]))continue
2;$I[$y]=$J[$y];}return$I;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($y);}function
where($Z,$o=array()){global$f,$x;$I=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$d=escape_key($y);$I[]=$d.($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($o[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$o[$y]["type"])&&preg_match("~[^ -@]~",$X))$I[]="$d = ".q($X)." COLLATE ".charset($f)."_bin";}foreach((array)$Z["null"]as$y)$I[]=escape_key($y)." IS NULL";return
implode(" AND ",$I);}function
where_check($X,$o=array()){parse_str($X,$cb);remove_slashes(array(&$cb));return
where($cb,$o);}function
where_link($s,$d,$Y,$lf="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($d)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$lf:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($e,$o,$L=array()){$I="";foreach($e
as$y=>$X){if($L&&!in_array(idf_escape($y),$L))continue;$Ga=convert_field($o[$y]);if($Ga)$I.=", $Ga AS ".idf_escape($y);}return$I;}function
cookie($C,$Y,$qe=2592000){global$ba;return
header("Set-Cookie: $C=".urlencode($Y).($qe?"; expires=".gmdate("D, d M Y H:i:s",time()+$qe)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Ji,$N,$V,$l=null){global$ec;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ec))."|username|".($l!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Ji!="server"||$N!=""?urlencode($Ji)."=".urlencode($N)."&":"")."username=".urlencode($V).($l!=""?"&db=".urlencode($l):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$Ee=null){if($Ee!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$Ee;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($G,$A,$Ee,$sg=true,$Cc=true,$Nc=false,$Qh=""){global$f,$m,$b;if($Cc){$qh=microtime(true);$Nc=!$f->query($G);$Qh=format_time($qh);}$mh="";if($G)$mh=$b->messageQuery($G,$Qh,$Nc);if($Nc){$m=error().$mh.script("messagesPrint();");return
false;}if($sg)redirect($A,$Ee.$mh);return
true;}function
queries($G){global$f;static$lg=array();static$qh;if(!$qh)$qh=microtime(true);if($G===null)return
array(implode("\n",$lg),format_time($qh));$lg[]=(preg_match('~;$~',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G).";";return$f->query($G);}function
apply_queries($G,$T,$zc='table'){foreach($T
as$R){if(!queries("$G ".$zc($R)))return
false;}return
true;}function
queries_redirect($A,$Ee,$sg){list($lg,$Qh)=queries(null);return
query_redirect($lg,$A,$Ee,$sg,false,!$sg,$Qh);}function
format_time($qh){return
sprintf('%.3f s',max(0,microtime(true)-$qh));}function
remove_from_uri($Df=""){return
substr(preg_replace("~(?<=[?&])($Df".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Ib){return" ".($E==$Ib?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$Qb=false){$Tc=$_FILES[$y];if(!$Tc)return
null;foreach($Tc
as$y=>$X)$Tc[$y]=(array)$X;$I='';foreach($Tc["error"]as$y=>$m){if($m)return$m;$C=$Tc["name"][$y];$Yh=$Tc["tmp_name"][$y];$zb=file_get_contents($Qb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$Yh":$Yh);if($Qb){$qh=substr($zb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$qh,$yg))$zb=iconv("utf-16","utf-8",$zb);elseif($qh=="\xEF\xBB\xBF")$zb=substr($zb,3);$I.=$zb."\n\n";}else$I.=$zb;}return$I;}function
upload_error($m){$Be=($m==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($m?'NepodaÅ™ilo se nahrÃ¡t soubor.'.($Be?" ".sprintf('MaximÃ¡lnÃ­ povolenÃ¡ velikost souboru je %sB.',$Be):""):'Soubor neexistuje.');}function
repeat_pattern($Qf,$oe){return
str_repeat("$Qf{0,65535}",$oe/65535)."$Qf{0,".($oe%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$oe=80,$xh=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$oe).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$oe).")($)?)",$Q,$B);return
h($B[1]).$xh.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",' '),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($gg,$Ad=array()){while(list($y,$X)=each($gg)){if(!in_array($y,$Ad)){if(is_array($X)){foreach($X
as$Yd=>$W)$gg[$y."[$Yd]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Oc=false){$I=table_status($R,$Oc);return($I?$I:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$I=array();foreach($b->foreignKeys($R)as$p){foreach($p["source"]as$X)$I[$X][]=$p;}return$I;}function
enum_input($U,$Ja,$n,$Y,$tc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$xe);$I=($tc!==null?"<label><input type='$U'$Ja value='$tc'".((is_array($Y)?in_array($tc,$Y):$Y===0)?" checked":"")."><i>".'prÃ¡zdnÃ©'."</i></label>":"");foreach($xe[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$eb=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$I.=" <label><input type='$U'$Ja value='".($s+1)."'".($eb?' checked':'').'>'.h($b->editVal($X,$n)).'</label>';}return$I;}function
input($n,$Y,$r){global$pi,$b,$x;$C=h(bracket_escape($n["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$r="json";}$Bg=($x=="mssql"&&$n["auto_increment"]);if($Bg&&!$_POST["save"])$r=null;$id=(isset($_GET["select"])||$Bg?array("orig"=>'pÅ¯vodnÃ­'):array())+$b->editFunctions($n);$Ja=" name='fields[$C]'";if($n["type"]=="enum")echo
nbsp($id[""])."<td>".$b->editInput($_GET["edit"],$n,$Ja,$Y);else{$rd=(in_array($r,$id)||isset($id[$r]));echo(count($id)>1?"<select name='function[$C]'>".optionlist($id,$r===null||$rd?$r:"")."</select>".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).script("qsl('select').onchange = functionChange;",""):nbsp(reset($id))).'<td>';$Md=$b->editInput($_GET["edit"],$n,$Ja,$Y);if($Md!="")echo$Md;elseif(preg_match('~bool~',$n["type"]))echo"<input type='hidden'$Ja value='0'>"."<input type='checkbox'".(preg_match('~^(1|t|true|y|yes|on)$~i',$Y)?" checked='checked'":"")."$Ja value='1'>";elseif($n["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$xe);foreach($xe[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$eb=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($eb?' checked':'').">".h($b->editVal($X,$n)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'>";elseif(($Oh=preg_match('~text|lob~',$n["type"]))||preg_match("~\n~",$Y)){if($Oh&&$x!="sqlite")$Ja.=" cols='50' rows='12'";else{$K=min(12,substr_count($Y,"\n")+1);$Ja.=" cols='30' rows='$K'".($K==1?" style='height: 1.2em;'":"");}echo"<textarea$Ja>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$n["type"]))echo"<textarea$Ja cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$De=(!preg_match('~int~',$n["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$n["length"],$B)?((preg_match("~binary~",$n["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$n["unsigned"]?1:0)):($pi[$n["type"]]?$pi[$n["type"]]+($n["unsigned"]?0:1):0));if($x=='sql'&&min_version(5.6)&&preg_match('~time~',$n["type"]))$De+=7;echo"<input".((!$rd||$r==="")&&preg_match('~(?<!o)int~',$n["type"])&&!preg_match('~\[\]~',$n["full_type"])?" type='number'":"")." value='".h($Y)."'".($De?" data-maxlength='$De'":"").(preg_match('~char|binary~',$n["type"])&&$De>20?" size='40'":"")."$Ja>";}echo$b->editHint($_GET["edit"],$n,$Y);$Wc=0;foreach($id
as$y=>$X){if($y===""||!$X)break;$Wc++;}if($Wc)echo
script("mixin(qsl('td'), {onchange: partial(skipOriginal, $Wc), oninput: function () { this.onchange(); }});");}}function
process_input($n){global$b;$u=bracket_escape($n["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($n["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($n["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($n["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($n["field"]):false);if($r=="NULL")return"NULL";if($n["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads")){$Tc=get_file("fields-$u");if(!is_string($Tc))return
false;return
q($Tc);}return$b->processInput($n,$Y,$r);}function
fields_from_edit(){global$dc;$I=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$C=bracket_escape($y,1);$I[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$dc->primary),);}return$I;}function
search_tables(){global$b,$f;$_GET["where"][0]["val"]=$_POST["query"];$fd=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$H=$f->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$H||$H->fetch_row()){if(!$fd){echo"<ul>\n";$fd=true;}echo"<li>".($H?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($fd?"</ul>":"<p class='message'>".'Å½Ã¡dnÃ© tabulky.')."\n";}function
dump_headers($zd,$Ne=false){global$b;$I=$b->dumpHeaders($zd,$Ne);$Bf=$_POST["output"];if($Bf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($zd).".$I".($Bf!="file"&&!preg_match('~[^0-9a-z]~',$Bf)?".$Bf":""));session_write_close();ob_flush();flush();return$I;}function
dump_csv($J){foreach($J
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$J[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($r,$d){return($r?($r=="unixepoch"?"DATETIME($d, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$d)"):$d);}function
get_temp_dir(){$I=ini_get("upload_tmp_dir");if(!$I){if(function_exists('sys_get_temp_dir'))$I=sys_get_temp_dir();else{$Uc=@tempnam("","");if(!$Uc)return
false;$I=dirname($Uc);unlink($Uc);}}return$I;}function
file_open_lock($Uc){$q=@fopen($Uc,"r+");if(!$q){$q=@fopen($Uc,"w");if(!$q)return;chmod($Uc,0660);}flock($q,LOCK_EX);return$q;}function
file_write_unlock($q,$Kb){rewind($q);fwrite($q,$Kb);ftruncate($q,strlen($Kb));flock($q,LOCK_UN);fclose($q);}function
password_file($h){$Uc=get_temp_dir()."/adminer.key";$I=@file_get_contents($Uc);if($I||!$h)return$I;$q=@fopen($Uc,"w");if($q){chmod($Uc,0660);$I=rand_string();fwrite($q,$I);fclose($q);}return$I;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$n,$Ph){global$b;if(is_array($X)){$I="";foreach($X
as$Yd=>$W)$I.="<tr>".($X!=array_values($X)?"<th>".h($Yd):"")."<td>".select_value($W,$_,$n,$Ph);return"<table cellspacing='0'>$I</table>";}if(!$_)$_=$b->selectLink($X,$n);if($_===null){if(is_mail($X))$_="mailto:$X";if(is_url($X))$_=$X;}$I=$b->editVal($X,$n);if($I!==null){if($I==="")$I="&nbsp;";elseif(!is_utf8($I))$I="\0";elseif($Ph!=""&&is_shortable($n))$I=shorten_utf8($I,max(0,+$Ph));else$I=h($I);}return$b->selectVal($I,$_,$n,$X);}function
is_mail($qc){$Ha='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$cc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Qf="$Ha+(\\.$Ha+)*@($cc?\\.)+$cc";return
is_string($qc)&&preg_match("(^$Qf(,\\s*$Qf)*\$)i",$qc);}function
is_url($Q){$cc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return
preg_match("~^(https?)://($cc?\\.)+$cc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q);}function
is_shortable($n){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$n["type"]);}function
count_rows($R,$Z,$Sd,$ld){global$x;$G=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Sd&&($x=="sql"||count($ld)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$ld).")$G":"SELECT COUNT(*)".($Sd?" FROM (SELECT 1$G GROUP BY ".implode(", ",$ld).") x":$G));}function
slow_query($G){global$b,$ai;$l=$b->database();$Rh=$b->queryTimeout();if(support("kill")&&is_object($g=connect())&&($l==""||$g->select_db($l))){$de=$g->result(connection_id());echo'<script',nonce(),'>
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'kill=',$de,'&token=',$ai,'\');
}, ',1000*$Rh,');
</script>
';}else$g=null;ob_flush();flush();$I=@get_key_vals($G,$g,$Rh,false);if($g){echo
script("clearTimeout(timeout);");ob_flush();flush();}return$I;}function
get_token(){$og=rand(1,1e6);return($og^$_SESSION["token"]).":$og";}function
verify_token(){list($ai,$og)=explode(":",$_POST["token"]);return($og^$_SESSION["token"])==$ai;}function
lzw_decompress($Ra){$Yb=256;$Sa=8;$lb=array();$Dg=0;$Eg=0;for($s=0;$s<strlen($Ra);$s++){$Dg=($Dg<<8)+ord($Ra[$s]);$Eg+=8;if($Eg>=$Sa){$Eg-=$Sa;$lb[]=$Dg>>$Eg;$Dg&=(1<<$Eg)-1;$Yb++;if($Yb>>$Sa)$Sa++;}}$Xb=range("\0","\xFF");$I="";foreach($lb
as$s=>$kb){$pc=$Xb[$kb];if(!isset($pc))$pc=$Yi.$Yi[0];$I.=$pc;if($s)$Xb[]=$Yi.$pc[0];$Yi=$pc;}return$I;}function
on_help($sb,$eh=0){return
script("mixin(qsl('select, input'), {onmouseover: function (event) { helpMouseover.call(this, event, $sb, $eh) }, onmouseout: helpMouseout});","");}function
edit_form($a,$o,$J,$xi){global$b,$x,$ai,$m;$Bh=$b->tableName(table_status1($a,true));page_header(($xi?'Upravit':'VloÅ¾it'),$m,array("select"=>array($a,$Bh)),$Bh);if($J===false)echo"<p class='error'>".'Å½Ã¡dnÃ© Å™Ã¡dky.'."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$o)echo"<p class='error'>".'NemÃ¡te oprÃ¡vnÄ›nÃ­ editovat tuto tabulku.'."\n";else{echo"<table cellspacing='0'>".script("qsl('table').onkeydown = editingKeydown;");foreach($o
as$C=>$n){echo"<tr><th>".$b->fieldName($n);$Rb=$_GET["set"][bracket_escape($C)];if($Rb===null){$Rb=$n["default"];if($n["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Rb,$yg))$Rb=$yg[1];}$Y=($J!==null?($J[$C]!=""&&$x=="sql"&&preg_match("~enum|set~",$n["type"])?(is_array($J[$C])?array_sum($J[$C]):+$J[$C]):$J[$C]):(!$xi&&$n["auto_increment"]?"":(isset($_GET["select"])?false:$Rb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$n);$r=($_POST["save"]?(string)$_POST["function"][$C]:($xi&&$n["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$n["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($n,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]'>".script("qsl('input').oninput = fieldChange;")."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($o){echo"<input type='submit' value='".'UloÅ¾it'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($xi?'UloÅ¾it a pokraÄovat v editaci':'UloÅ¾it a vloÅ¾it dalÅ¡Ã­')."' title='Ctrl+Shift+Enter'>\n",($xi?script("qsl('input').onclick = function () { return !ajaxForm(this.form, '".'UklÃ¡dÃ¡ se'."...', this); };"):"");}}echo($xi?"<input type='submit' name='delete' value='".'Smazat'."'>".confirm()."\n":($_POST||!$o?"":script("focus(qsa('td', qs('#form'))[1].firstChild);")));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$ai,'">
</form>
';}global$b,$f,$ec,$mc,$wc,$m,$id,$od,$ba,$Ld,$x,$ca,$he,$hf,$Rf,$uh,$sd,$ai,$gi,$pi,$wi,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";if($_SERVER["HTTP_X_FORWARDED_PREFIX"])$_SERVER["REQUEST_URI"]=$_SERVER["HTTP_X_FORWARDED_PREFIX"].$_SERVER["REQUEST_URI"];$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_cache_limiter("");session_name("adminer_sid");$Ef=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Ef[]=true;call_user_func_array('session_set_cookie_params',$Ef);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Vc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",16);function
get_lang(){return'cs';}function
lang($fi,$Ye=null){if(is_array($fi)){$Uf=($Ye==1?0:($Ye&&$Ye<5?1:2));$fi=$fi[$Uf];}$fi=str_replace("%d","%s",$fi);$Ye=format_number($Ye);return
sprintf($fi,$Ye);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Uf=array_search("SQL",$b->operators);if($Uf!==false)unset($b->operators[$Uf]);}function
dsn($jc,$V,$F){try{parent::__construct($jc,$V,$F);}catch(Exception$Ac){auth_error(h($Ac->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($G,$qi=false){$H=parent::query($G);$this->error="";if(!$H){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H){$H=$this->_result;if(!$H)return
false;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($G,$n=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch();return$J[$n];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",(array)$J->flags)?63:0);return$J;}}}$ec=array();class
Min_SQL{var$_conn;function
__construct($f){$this->_conn=$f;}function
select($R,$L,$Z,$ld,$rf=array(),$z=1,$E=0,$cg=false){global$b,$x;$Sd=(count($ld)<count($L));$G=$b->selectQueryBuild($L,$Z,$ld,$rf,$z,$E);if(!$G)$G="SELECT".limit(($_GET["page"]!="last"&&$z!=""&&$ld&&$Sd&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$L)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($ld&&$Sd?"\nGROUP BY ".implode(", ",$ld):"").($rf?"\nORDER BY ".implode(", ",$rf):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$qh=microtime(true);$I=$this->_conn->query($G);if($cg)echo$b->selectQuery($G,$qh,!$I);return$I;}function
delete($R,$mg,$z=0){$G="FROM ".table($R);return
queries("DELETE".($z?limit1($R,$G,$mg):" $G$mg"));}function
update($R,$O,$mg,$z=0,$M="\n"){$Hi=array();foreach($O
as$y=>$X)$Hi[]="$y = $X";$G=table($R)." SET$M".implode(",$M",$Hi);return
queries("UPDATE".($z?limit1($R,$G,$mg,$M):" $G$mg"));}function
insert($R,$O){return
queries("INSERT INTO ".table($R).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($R,$K,$ag){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}function
warnings(){return'';}}$ec["sqlite"]="SQLite 3";$ec["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Xf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Uc){$this->_link=new
SQLite3($Uc);$Ki=$this->_link->version();$this->server_info=$Ki["versionString"];}function
query($G){$H=@$this->_link->query($G);$this->error="";if(!$H){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($H->numColumns())return
new
Min_Result($H);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($G,$n=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetchArray();return$J[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$d=$this->_offset++;$U=$this->_result->columnType($d);return(object)array("name"=>$this->_result->columnName($d),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Uc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Uc);}function
query($G,$qi=false){$Ke=($qi?"unbufferedQuery":"query");$H=@$this->_link->$Ke($G,SQLITE_BOTH,$m);$this->error="";if(!$H){$this->error=$m;return
false;}elseif($H===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($H);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($G,$n=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->_result->fetch();return$J[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;if(method_exists($H,'numRows'))$this->num_rows=$H->numRows();}function
fetch_assoc(){$J=$this->_result->fetch(SQLITE_ASSOC);if(!$J)return
false;$I=array();foreach($J
as$y=>$X)$I[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$I;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$Qf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Qf\\.)?$Qf\$~",$C,$B)){$R=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Uc){$this->dsn(DRIVER.":$Uc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");$this->query("PRAGMA foreign_keys = 1");}function
select_db($Uc){if(is_readable($Uc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Uc)?$Uc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Uc")." AS a")){parent::__construct($Uc);$this->query("PRAGMA foreign_keys = 1");return
true;}return
false;}function
multi_query($G){return$this->_result=$this->query($G);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$K,$ag){$Hi=array();foreach($K
as$O)$Hi[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($K))).") VALUES\n".implode(",\n",$Hi));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($G,$Z,$z,$D=0,$M=" "){return" $G$Z".($z!==null?$M."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($R,$G,$Z,$M="\n"){global$f;return(preg_match('~^INTO~',$G)||$f->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($G,$Z,1,0,$M):" $G WHERE rowid = (SELECT rowid FROM ".table($R).$Z.$M."LIMIT 1)");}function
db_collation($l,$pb){global$f;return$f->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($k){return
array();}function
table_status($C=""){global$f;$I=array();foreach(get_rows("SELECT name AS Name, type AS Engine, 'rowid' AS Oid, '' AS Auto_increment FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$J){$J["Rows"]=$f->result("SELECT COUNT(*) FROM ".idf_escape($J["Name"]));$I[$J["Name"]]=$J;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$J)$I[$J["name"]]["Auto_increment"]=$J["seq"];return($C!=""?$I[$C]:$I);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$f;return!$f->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$f;$I=array();$ag="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$J){$C=$J["name"];$U=strtolower($J["type"]);$Rb=$J["dflt_value"];$I[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Rb,$B)?str_replace("''","'",$B[1]):($Rb=="NULL"?null:$Rb)),"null"=>!$J["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$J["pk"],);if($J["pk"]){if($ag!="")$I[$ag]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$I[$C]["auto_increment"]=true;$ag=$C;}}$mh=$f->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$mh,$xe,PREG_SET_ORDER);foreach($xe
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($I[$C])$I[$C]["collation"]=trim($B[3],"'");}return$I;}function
indexes($R,$g=null){global$f;if(!is_object($g))$g=$f;$I=array();$mh=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$mh,$B)){$I[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$xe,PREG_SET_ORDER);foreach($xe
as$B){$I[""]["columns"][]=idf_unescape($B[2]).$B[4];$I[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$I){foreach(fields($R)as$C=>$n){if($n["primary"])$I[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$ph=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$g);foreach(get_rows("PRAGMA index_list(".table($R).")",$g)as$J){$C=$J["name"];$v=array("type"=>($J["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$g)as$Ng){$v["columns"][]=$Ng["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$ph[$C],$yg)){preg_match_all('/("[^"]*+")+( DESC)?/',$yg[2],$xe);foreach($xe[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$I[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$I[""]["columns"]||$v["descs"]!=$I[""]["descs"]||!preg_match("~^sqlite_~",$C))$I[$C]=$v;}return$I;}function
foreign_keys($R){$I=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$J){$p=&$I[$J["id"]];if(!$p)$p=$J;$p["source"][]=$J["from"];$p["target"][]=$J["to"];}return$I;}function
view($C){global$f;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$f->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($l){return
false;}function
error(){global$f;return
h($f->error);}function
check_sqlite_name($C){global$f;$Kc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Kc)\$~",$C)){$f->error=sprintf('ProsÃ­m pouÅ¾ijte jednu z koncovek %s.',str_replace("|",", ",$Kc));return
false;}return
true;}function
create_database($l,$ob){global$f;if(file_exists($l)){$f->error='Soubor existuje.';return
false;}if(!check_sqlite_name($l))return
false;try{$_=new
Min_SQLite($l);}catch(Exception$Ac){$f->error=$Ac->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($k){global$f;$f->__construct(":memory:");foreach($k
as$l){if(!@unlink($l)){$f->error='Soubor existuje.';return
false;}}return
true;}function
rename_database($C,$ob){global$f;if(!check_sqlite_name($C))return
false;$f->__construct(":memory:");$f->error='Soubor existuje.';return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$o,$bd,$ub,$uc,$ob,$La,$Kf){$Bi=($R==""||$bd);foreach($o
as$n){if($n[0]!=""||!$n[1]||$n[2]){$Bi=true;break;}}$c=array();$_f=array();foreach($o
as$n){if($n[1]){$c[]=($Bi?$n[1]:"ADD ".implode($n[1]));if($n[0]!="")$_f[$n[0]]=$n[1][0];}}if(!$Bi){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($R,$C,$c,$_f,$bd))return
false;if($La)queries("UPDATE sqlite_sequence SET seq = $La WHERE name = ".q($C));return
true;}function
recreate_table($R,$C,$o,$_f,$bd,$w=array()){if($R!=""){if(!$o){foreach(fields($R)as$y=>$n){$o[]=process_field($n,$n);$_f[$y]=idf_escape($y);}}$bg=false;foreach($o
as$n){if($n[6])$bg=true;}$hc=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$hc[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$be=>$v){$e=array();foreach($v["columns"]as$y=>$d){if(!$_f[$d])continue
2;$e[]=$_f[$d].($v["descs"][$y]?" DESC":"");}if(!$hc[$be]){if($v["type"]!="PRIMARY"||!$bg)$w[]=array($v["type"],$be,$e);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$bd[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$be=>$p){foreach($p["source"]as$y=>$d){if(!$_f[$d])continue
2;$p["source"][$y]=idf_unescape($_f[$d]);}if(!isset($bd[" $be"]))$bd[]=" ".format_foreign_key($p);}queries("BEGIN");}foreach($o
as$y=>$n)$o[$y]="  ".implode($n);$o=array_merge($o,array_filter($bd));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$o)."\n)"))return
false;if($R!=""){if($_f&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$_f).") SELECT ".implode(", ",array_map('idf_escape',array_keys($_f)))." FROM ".table($R)))return
false;$mi=array();foreach(triggers($R)as$ki=>$Sh){$ji=trigger($ki);$mi[]="CREATE TRIGGER ".idf_escape($ki)." ".implode(" ",$Sh)." ON ".table($C)."\n$ji[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($mi
as$ji){if(!queries($ji))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$C,$e){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($R."_"))." ON ".table($R)." $e";}function
alter_indexes($R,$c){foreach($c
as$ag){if($ag[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Mi){return
apply_queries("DROP VIEW",$Mi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Mi,$Jh){return
false;}function
trigger($C){global$f;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$li=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$li["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$f->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$af=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($af?" OF":""),"Of"=>($af[0]=='`'||$af[0]=='"'?idf_unescape($af):$af),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($R){$I=array();$li=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$J){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$li["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$J["sql"],$B);$I[$J["name"]]=array($B[1],$B[2]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ROWID()");}function
explain($f,$G){return$f->query("EXPLAIN QUERY PLAN $G");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Rg){return
true;}function
create_sql($R,$La,$vh){global$f;$I=$f->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$C=>$v){if($C=='')continue;$I.=";\n\n".index_sql($R,$v['type'],$C,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$I;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($j){}function
trigger_sql($R){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$f;$I=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$I[$y]=$f->result("PRAGMA $y");return$I;}function
show_status(){$I=array();foreach(get_vals("PRAGMA compile_options")as$of){list($y,$X)=explode("=",$of,2);$I[$y]=$X;}return$I;}function
convert_field($n){}function
unconvert_field($n,$I){return$I;}function
support($Pc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Pc);}$x="sqlite";$pi=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$uh=array_keys($pi);$wi=array();$mf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$id=array("hex","length","lower","round","unixepoch","upper");$od=array("avg","count","count distinct","group_concat","max","min","sum");$mc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$ec["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Xf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($xc,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($N,$V,$F){global$b;$l=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($F,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$l!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Ki=pg_version($this->_link);$this->server_info=$Ki["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($j){global$b;if($j==$b->database())return$this->_database;$I=@pg_connect("$this->_string dbname='".addcslashes($j,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($I)$this->_link=$I;return$I;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($G,$qi=false){$H=@pg_query($this->_link,$G);$this->error="";if(!$H){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($H)){$this->affected_rows=pg_affected_rows($H);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$n=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
pg_fetch_result($H->_result,0,$n);}function
warnings(){return
h(pg_last_notice($this->_link));}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($H){$this->_result=$H;$this->num_rows=pg_num_rows($H);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$d=$this->_offset++;$I=new
stdClass;if(function_exists('pg_field_table'))$I->orgtable=pg_field_table($this->_result,$d);$I->name=pg_field_name($this->_result,$d);$I->orgname=$I->name;$I->type=pg_field_type($this->_result,$d);$I->charsetnr=($I->type=="bytea"?63:0);return$I;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$F){global$b;$l=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",$V,$F);return
true;}function
select_db($j){global$b;return($b->database()==$j);}function
warnings(){return'';}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$K,$ag){global$f;foreach($K
as$O){$xi=array();$Z=array();foreach($O
as$y=>$X){$xi[]="$y = $X";if(isset($ag[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$xi)." WHERE ".implode(" AND ",$Z))&&$f->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}function
warnings(){return$this->_conn->warnings();}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b,$pi,$uh;$f=new
Min_DB;$i=$b->credentials();if($f->connect($i[0],$i[1],$i[2])){if(min_version(9,0,$f)){$f->query("SET application_name = 'Adminer'");if(min_version(9.2,0,$f)){$uh['Å˜etÄ›zce'][]="json";$pi["json"]=4294967295;if(min_version(9.4,0,$f)){$uh['Å˜etÄ›zce'][]="jsonb";$pi["jsonb"]=4294967295;}}}return$f;}return$f->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($G,$Z,$z,$D=0,$M=" "){return" $G$Z".($z!==null?$M."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($R,$G,$Z,$M="\n"){return(preg_match('~^INTO~',$G)?limit($G,$Z,1,0,$M):" $G WHERE ctid = (SELECT ctid FROM ".table($R).$Z.$M."LIMIT 1)");}function
db_collation($l,$pb){global$f;return$f->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$f;return$f->result("SELECT user");}function
tables_list(){$G="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$G.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$G.="
ORDER BY 1";return
get_key_vals($G);}function
count_tables($k){return
array();}function
table_status($C=""){$I=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", CASE WHEN c.relhasoids THEN 'oid' ELSE '' END AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v', 'f')
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$J)$I[$J["Name"]]=$J;return($C!=""?$I[$C]:$I);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$I=array();$Ca=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$J){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$J["full_type"],$B);list(,$U,$oe,$J["length"],$wa,$Fa)=$B;$J["length"].=$Fa;$db=$U.$wa;if(isset($Ca[$db])){$J["type"]=$Ca[$db];$J["full_type"]=$J["type"].$oe.$Fa;}else{$J["type"]=$U;$J["full_type"]=$J["type"].$oe.$wa.$Fa;}$J["null"]=!$J["attnotnull"];$J["auto_increment"]=preg_match('~^nextval\\(~i',$J["default"]);$J["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$J["default"],$B))$J["default"]=($B[1]=="NULL"?null:(($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2]));$I[$J["field"]]=$J;}return$I;}function
indexes($R,$g=null){global$f;if(!is_object($g))$g=$f;$I=array();$Ch=$g->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ch AND attnum > 0",$g);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $Ch AND ci.oid = i.indexrelid",$g)as$J){$zg=$J["relname"];$I[$zg]["type"]=($J["indispartial"]?"INDEX":($J["indisprimary"]?"PRIMARY":($J["indisunique"]?"UNIQUE":"INDEX")));$I[$zg]["columns"]=array();foreach(explode(" ",$J["indkey"])as$Hd)$I[$zg]["columns"][]=$e[$Hd];$I[$zg]["descs"]=array();foreach(explode(" ",$J["indoption"])as$Id)$I[$zg]["descs"][]=($Id&1?'1':null);$I[$zg]["lengths"]=array();}return$I;}function
foreign_keys($R){global$hf;$I=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$J){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$J['definition'],$B)){$J['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$we)){$J['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$we[2]));$J['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$we[4]));}$J['target']=array_map('trim',explode(',',$B[3]));$J['on_delete']=(preg_match("~ON DELETE ($hf)~",$B[4],$we)?$we[1]:'NO ACTION');$J['on_update']=(preg_match("~ON UPDATE ($hf)~",$B[4],$we)?$we[1]:'NO ACTION');$I[$J['conname']]=$J;}}return$I;}function
view($C){global$f;return
array("select"=>trim($f->result("SELECT view_definition
FROM information_schema.views
WHERE table_schema = current_schema() AND table_name = ".q($C))));}function
collations(){return
array();}function
information_schema($l){return($l=="information_schema");}function
error(){global$f;$I=h($f->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$I,$B))$I=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($I);}function
create_database($l,$ob){return
queries("CREATE DATABASE ".idf_escape($l).($ob?" ENCODING ".idf_escape($ob):""));}function
drop_databases($k){global$f;$f->close();return
apply_queries("DROP DATABASE",$k,'idf_escape');}function
rename_database($C,$ob){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,$o,$bd,$ub,$uc,$ob,$La,$Kf){$c=array();$lg=array();foreach($o
as$n){$d=idf_escape($n[0]);$X=$n[1];if(!$X)$c[]="DROP $d";else{$Gi=$X[5];unset($X[5]);if(isset($X[6])&&$n[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($n[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($d!=$X[0])$lg[]="ALTER TABLE ".table($R)." RENAME $d TO $X[0]";$c[]="ALTER $d TYPE$X[1]";if(!$X[6]){$c[]="ALTER $d ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $d ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($n[0]!=""||$Gi!="")$lg[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Gi!=""?substr($Gi,9):"''");}}$c=array_merge($c,$bd);if($R=="")array_unshift($lg,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($lg,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$C)$lg[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$ub!="")$lg[]="COMMENT ON TABLE ".table($C)." IS ".q($ub);if($La!=""){}foreach($lg
as$G){if(!queries($G))return
false;}return
true;}function
alter_indexes($R,$c){$h=array();$fc=array();$lg=array();foreach($c
as$X){if($X[0]!="INDEX")$h[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$fc[]=idf_escape($X[1]);else$lg[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($h)array_unshift($lg,"ALTER TABLE ".table($R).implode(",",$h));if($fc)array_unshift($lg,"DROP INDEX ".implode(", ",$fc));foreach($lg
as$G){if(!queries($G))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Mi){return
drop_tables($Mi);}function
drop_tables($T){foreach($T
as$R){$P=table_status($R);if(!queries("DROP ".strtoupper($P["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$Mi,$Jh){foreach(array_merge($T,$Mi)as$R){$P=table_status($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($Jh)))return
false;}return
true;}function
trigger($C,$R=null){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$K=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($C));return
reset($K);}function
triggers($R){$I=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$J)$I[$J["trigger_name"]]=array($J["action_timing"],$J["event_manipulation"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routine($C,$U){$K=get_rows('SELECT routine_definition AS definition, LOWER(external_language) AS language, *
FROM information_schema.routines
WHERE routine_schema = current_schema() AND specific_name = '.q($C));$I=$K[0];$I["returns"]=array("type"=>$I["type_udt_name"]);$I["fields"]=get_rows('SELECT parameter_name AS field, data_type AS type, character_maximum_length AS length, parameter_mode AS inout
FROM information_schema.parameters
WHERE specific_schema = current_schema() AND specific_name = '.q($C).'
ORDER BY ordinal_position');return$I;}function
routines(){return
get_rows('SELECT specific_name AS "SPECIFIC_NAME", routine_type AS "ROUTINE_TYPE", routine_name AS "ROUTINE_NAME", type_udt_name AS "DTD_IDENTIFIER"
FROM information_schema.routines
WHERE routine_schema = current_schema()
ORDER BY SPECIFIC_NAME');}function
routine_languages(){return
get_vals("SELECT LOWER(lanname) FROM pg_catalog.pg_language");}function
routine_id($C,$J){$I=array();foreach($J["fields"]as$n)$I[]=$n["type"];return
idf_escape($C)."(".implode(", ",$I).")";}function
last_id(){return
0;}function
explain($f,$G){return$f->query("EXPLAIN $G");}function
found_rows($S,$Z){global$f;if(preg_match("~ rows=([0-9]+)~",$f->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$yg))return$yg[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$f;return$f->result("SELECT current_schema()");}function
set_schema($Qg){global$f,$pi,$uh;$I=$f->query("SET search_path TO ".idf_escape($Qg));foreach(types()as$U){if(!isset($pi[$U])){$pi[$U]=0;$uh['UÅ¾ivatelskÃ© typy'][]=$U;}}return$I;}function
create_sql($R,$La,$vh){global$f;$I='';$Gg=array();$Zg=array();$P=table_status($R);$o=fields($R);$w=indexes($R);ksort($w);$Zc=foreign_keys($R);ksort($Zc);if(!$P||empty($o))return
false;$I="CREATE TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." (\n    ";foreach($o
as$Rc=>$n){$Hf=idf_escape($n['field']).' '.$n['full_type'].(is_null($n['default'])?"":" DEFAULT $n[default]").($n['attnotnull']?" NOT NULL":"");$Gg[]=$Hf;if(preg_match('~nextval\(\'([^\']+)\'\)~',$n['default'],$xe)){$Yg=$xe[1];$lh=reset(get_rows("SELECT * FROM $Yg"));$Zg[]=($vh=="DROP+CREATE"?"DROP SEQUENCE $Yg;\n":"")."CREATE SEQUENCE $Yg INCREMENT $lh[increment_by] MINVALUE $lh[min_value] MAXVALUE $lh[max_value] START ".($La?$lh['last_value']:1)." CACHE $lh[cache_value];";}}if(!empty($Zg))$I=implode("\n\n",$Zg)."\n\n$I";foreach($w
as$Cd=>$v){switch($v['type']){case'UNIQUE':$Gg[]="CONSTRAINT ".idf_escape($Cd)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$Gg[]="CONSTRAINT ".idf_escape($Cd)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($Zc
as$Yc=>$Xc)$Gg[]="CONSTRAINT ".idf_escape($Yc)." $Xc[definition] ".($Xc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$I.=implode(",\n    ",$Gg)."\n) WITH (oids = ".($P['Oid']?'true':'false').");";foreach($w
as$Cd=>$v){if($v['type']=='INDEX')$I.="\n\nCREATE INDEX ".idf_escape($Cd)." ON ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($P['Comment'])$I.="\n\nCOMMENT ON TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($o
as$Rc=>$n){if($n['comment'])$I.="\n\nCOMMENT ON COLUMN ".idf_escape($P['nspname']).".".idf_escape($P['Name']).".".idf_escape($Rc)." IS ".q($n['comment']).";";}return
rtrim($I,';');}function
trigger_sql($R){$P=table_status($R);$I="";foreach(triggers($R)as$ii=>$hi){$ji=trigger($ii,$P['Name']);$I.="\nCREATE TRIGGER ".idf_escape($ji['Trigger'])." $ji[Timing] $ji[Events] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $ji[Type] $ji[Statement];;\n";}return$I;}function
use_sql($j){return"\connect ".idf_escape($j);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".(min_version(9.2)?"pid":"procpid"));}function
show_status(){}function
convert_field($n){}function
unconvert_field($n,$I){return$I;}function
support($Pc){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.(min_version(9.3)?'materializedview|':'').'scheme|routine|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Pc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$f;return$f->result("SHOW max_connections");}$x="pgsql";$pi=array();$uh=array();foreach(array('ÄŒÃ­sla'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Datum a Äas'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Å˜etÄ›zce'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'BinÃ¡rnÃ­'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'SÃ­Å¥'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometrie'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$pi+=$X;$uh[$y]=array_keys($X);}$wi=array();$mf=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$id=array("char_length","lower","round","to_hex","to_timestamp","upper");$od=array("avg","count","count distinct","max","min","sum");$mc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$ec["oracle"]="Oracle";if(isset($_GET["oracle"])){$Xf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($xc,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($N,$V,$F){$this->_link=@oci_new_connect($V,$F,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$m=oci_error();$this->error=$m["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return
true;}function
query($G,$qi=false){$H=oci_parse($this->_link,$G);$this->error="";if(!$H){$m=oci_error($this->_link);$this->errno=$m["code"];$this->error=$m["message"];return
false;}set_error_handler(array($this,'_error'));$I=@oci_execute($H);restore_error_handler();if($I){if(oci_num_fields($H))return
new
Min_Result($H);$this->affected_rows=oci_num_rows($H);}return$I;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$n=1){$H=$this->query($G);if(!is_object($H)||!oci_fetch($H->_result))return
false;return
oci_result($H->_result,$n);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$y=>$X){if(is_a($X,'OCI-Lob'))$J[$y]=$X->load();}return$J;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$d=$this->_offset++;$I=new
stdClass;$I->name=oci_field_name($this->_result,$d);$I->orgname=$I->name;$I->type=oci_field_type($this->_result,$d);$I->charsetnr=(preg_match("~raw|blob|bfile~",$I->type)?63:0);return$I;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$F){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$F);return
true;}function
select_db($j){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$f=new
Min_DB;$i=$b->credentials();if($f->connect($i[0],$i[1],$i[2]))return$f;return$f->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($G,$Z,$z,$D=0,$M=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $G$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $G$Z) WHERE rownum <= ".($z+$D):" $G$Z"));}function
limit1($R,$G,$Z,$M="\n"){return" $G$Z";}function
db_collation($l,$pb){global$f;return$f->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$f;return$f->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($k){return
array();}function
table_status($C=""){$I=array();$Sg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Sg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Sg":"")."
ORDER BY 1")as$J){if($C!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$I=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$J){$U=$J["DATA_TYPE"];$oe="$J[DATA_PRECISION],$J[DATA_SCALE]";if($oe==",")$oe=$J["DATA_LENGTH"];$I[$J["COLUMN_NAME"]]=array("field"=>$J["COLUMN_NAME"],"full_type"=>$U.($oe?"($oe)":""),"type"=>strtolower($U),"length"=>$oe,"default"=>$J["DATA_DEFAULT"],"null"=>($J["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$I;}function
indexes($R,$g=null){$I=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$g)as$J){$Cd=$J["INDEX_NAME"];$I[$Cd]["type"]=($J["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($J["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$I[$Cd]["columns"][]=$J["COLUMN_NAME"];$I[$Cd]["lengths"][]=($J["CHAR_LENGTH"]&&$J["CHAR_LENGTH"]!=$J["COLUMN_LENGTH"]?$J["CHAR_LENGTH"]:null);$I[$Cd]["descs"][]=($J["DESCEND"]?'1':null);}return$I;}function
view($C){$K=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($K);}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$f;return
h($f->error);}function
explain($f,$G){$f->query("EXPLAIN PLAN FOR $G");return$f->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$C,$o,$bd,$ub,$uc,$ob,$La,$Kf){$c=$fc=array();foreach($o
as$n){$X=$n[1];if($X&&$n[0]!=""&&idf_escape($n[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($n[0])." TO $X[0]");if($X)$c[]=($R!=""?($n[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$fc[]=idf_escape($n[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$fc||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$fc).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
foreign_keys($R){$I=array();$G="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($G)as$J)$I[$J['NAME']]=array("db"=>$J['DEST_DB'],"table"=>$J['DEST_TABLE'],"source"=>array($J['SRC_COLUMN']),"target"=>array($J['DEST_COLUMN']),"on_delete"=>$J['ON_DELETE'],"on_update"=>null,);return$I;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Mi){return
apply_queries("DROP VIEW",$Mi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$f;return$f->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Rg){global$f;return$f->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Rg));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$K=get_rows('SELECT * FROM v$instance');return
reset($K);}function
convert_field($n){}function
unconvert_field($n,$I){return$I;}function
support($Pc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Pc);}$x="oracle";$pi=array();$uh=array();foreach(array('ÄŒÃ­sla'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Datum a Äas'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Å˜etÄ›zce'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'BinÃ¡rnÃ­'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$pi+=$X;$uh[$y]=array_keys($X);}$wi=array();$mf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$id=array("length","lower","round","upper");$od=array("avg","count","count distinct","max","min","sum");$mc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$ec["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Xf=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$m){$this->errno=$m["code"];$this->error.="$m[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$F){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$F,"CharacterSet"=>"UTF-8"));if($this->_link){$Jd=sqlsrv_server_info($this->_link);$this->server_info=$Jd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return$this->query("USE ".idf_escape($j));}function
query($G,$qi=false){$H=sqlsrv_query($this->_link,$G);$this->error="";if(!$H){$this->_get_error();return
false;}return$this->store_result($H);}function
multi_query($G){$this->_result=sqlsrv_query($this->_link,$G);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($H=null){if(!$H)$H=$this->_result;if(!$H)return
false;if(sqlsrv_field_metadata($H))return
new
Min_Result($H);$this->affected_rows=sqlsrv_rows_affected($H);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($G,$n=0){$H=$this->query($G);if(!is_object($H))return
false;$J=$H->fetch_row();return$J[$n];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($H){$this->_result=$H;}function
_convert($J){foreach((array)$J
as$y=>$X){if(is_a($X,'DateTime'))$J[$y]=$X->format("Y-m-d H:i:s");}return$J;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$n=$this->_fields[$this->_offset++];$I=new
stdClass;$I->name=$n["Name"];$I->orgname=$n["Name"];$I->type=($n["Type"]==1?254:0);return$I;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$F){$this->_link=@mssql_connect($N,$V,$F);if($this->_link){$H=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$J=$H->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$J[0]] $J[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return
mssql_select_db($j);}function
query($G,$qi=false){$H=@mssql_query($G,$this->_link);$this->error="";if(!$H){$this->error=mssql_get_last_message();return
false;}if($H===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($G,$n=0){$H=$this->query($G);if(!is_object($H))return
false;return
mssql_result($H->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($H){$this->_result=$H;$this->num_rows=mssql_num_rows($H);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$I=mssql_fetch_field($this->_result);$I->orgtable=$I->table;$I->orgname=$I->name;return$I;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($N,$V,$F){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$F);return
true;}function
select_db($j){return$this->query("USE ".idf_escape($j));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$K,$ag){foreach($K
as$O){$xi=array();$Z=array();foreach($O
as$y=>$X){$xi[]="$y = $X";if(isset($ag[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$xi)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$f=new
Min_DB;$i=$b->credentials();if($f->connect($i[0],$i[1],$i[2]))return$f;return$f->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($G,$Z,$z,$D=0,$M=" "){return($z!==null?" TOP (".($z+$D).")":"")." $G$Z";}function
limit1($R,$G,$Z,$M="\n"){return
limit($G,$Z,1,0,$M);}function
db_collation($l,$pb){global$f;return$f->result("SELECT collation_name FROM sys.databases WHERE name = ".q($l));}function
engines(){return
array();}function
logged_user(){global$f;return$f->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($k){global$f;$I=array();foreach($k
as$l){$f->select_db($l);$I[$l]=$f->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$I;}function
table_status($C=""){$I=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$J){if($C!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$I=array();foreach(get_rows("SELECT c.max_length, c.precision, c.scale, c.name, c.is_nullable, c.is_identity, c.collation_name, t.name type, CAST(d.definition as text) [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$J){$U=$J["type"];$oe=(preg_match("~char|binary~",$U)?$J["max_length"]:($U=="decimal"?"$J[precision],$J[scale]":""));$I[$J["name"]]=array("field"=>$J["name"],"full_type"=>$U.($oe?"($oe)":""),"type"=>$U,"length"=>$oe,"default"=>$J["default"],"null"=>$J["is_nullable"],"auto_increment"=>$J["is_identity"],"collation"=>$J["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$J["is_identity"],);}return$I;}function
indexes($R,$g=null){$I=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$g)as$J){$C=$J["name"];$I[$C]["type"]=($J["is_primary_key"]?"PRIMARY":($J["is_unique"]?"UNIQUE":"INDEX"));$I[$C]["lengths"]=array();$I[$C]["columns"][$J["key_ordinal"]]=$J["column_name"];$I[$C]["descs"][$J["key_ordinal"]]=($J["is_descending_key"]?'1':null);}return$I;}function
view($C){global$f;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$f->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$I=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$ob)$I[preg_replace('~_.*~','',$ob)][]=$ob;return$I;}function
information_schema($l){return
false;}function
error(){global$f;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$f->error)));}function
create_database($l,$ob){return
queries("CREATE DATABASE ".idf_escape($l).(preg_match('~^[a-z0-9_]+$~i',$ob)?" COLLATE $ob":""));}function
drop_databases($k){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$k)));}function
rename_database($C,$ob){if(preg_match('~^[a-z0-9_]+$~i',$ob))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $ob");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,$o,$bd,$ub,$uc,$ob,$La,$Kf){$c=array();foreach($o
as$n){$d=idf_escape($n[0]);$X=$n[1];if(!$X)$c["DROP"][]=" COLUMN $d";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($n[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($bd[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($d!=$X[0])queries("EXEC sp_rename ".q(table($R).".$d").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($bd)$c[""]=$bd;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$fc=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$fc[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$fc||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$fc)));}function
last_id(){global$f;return$f->result("SELECT SCOPE_IDENTITY()");}function
explain($f,$G){$f->query("SET SHOWPLAN_ALL ON");$I=$f->query($G);$f->query("SET SHOWPLAN_ALL OFF");return$I;}function
found_rows($S,$Z){}function
foreign_keys($R){$I=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$J){$p=&$I[$J["FK_NAME"]];$p["table"]=$J["PKTABLE_NAME"];$p["source"][]=$J["FKCOLUMN_NAME"];$p["target"][]=$J["PKCOLUMN_NAME"];}return$I;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Mi){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Mi,$Jh){return
apply_queries("ALTER SCHEMA ".idf_escape($Jh)." TRANSFER",array_merge($T,$Mi));}function
trigger($C){if($C=="")return
array();$K=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$I=reset($K);if($I)$I["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$I["text"]);return$I;}function
triggers($R){$I=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$J)$I[$J["name"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$f;if($_GET["ns"]!="")return$_GET["ns"];return$f->result("SELECT SCHEMA_NAME()");}function
set_schema($Qg){return
true;}function
use_sql($j){return"USE ".idf_escape($j);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($n){}function
unconvert_field($n,$I){return$I;}function
support($Pc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Pc);}$x="mssql";$pi=array();$uh=array();foreach(array('ÄŒÃ­sla'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Datum a Äas'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Å˜etÄ›zce'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'BinÃ¡rnÃ­'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$pi+=$X;$uh[$y]=array_keys($X);}$wi=array();$mf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$id=array("len","lower","round","upper");$od=array("avg","count","count distinct","max","min","sum");$mc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$ec['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Xf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$F){$this->_link=ibase_connect($N,$V,$F);if($this->_link){$_i=explode(':',$N);$this->service_link=ibase_service_attach($_i[0],$V,$F);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return($j=="domain");}function
query($G,$qi=false){$H=ibase_query($G,$this->_link);if(!$H){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($H===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$n=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;$J=$H->fetch_row();return$J[$n];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($H){$this->_result=$H;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$n=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$n['name'],'orgname'=>$n['name'],'type'=>$n['type'],'charsetnr'=>$n['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$f=new
Min_DB;$i=$b->credentials();if($f->connect($i[0],$i[1],$i[2]))return$f;return$f->error;}function
get_databases($ad){return
array("domain");}function
limit($G,$Z,$z,$D=0,$M=" "){$I='';$I.=($z!==null?$M."FIRST $z".($D?" SKIP $D":""):"");$I.=" $G$Z";return$I;}function
limit1($R,$G,$Z,$M="\n"){return
limit($G,$Z,1,0,$M);}function
db_collation($l,$pb){}function
engines(){return
array();}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
tables_list(){global$f;$G='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$H=ibase_query($f->_link,$G);$I=array();while($J=ibase_fetch_assoc($H))$I[$J['RDB$RELATION_NAME']]='table';ksort($I);return$I;}function
count_tables($k){return
array();}function
table_status($C="",$Oc=false){global$f;$I=array();$Kb=tables_list();foreach($Kb
as$v=>$X){$v=trim($v);$I[$v]=array('Name'=>$v,'Engine'=>'standard',);if($C==$v)return$I[$v];}return$I;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$f;$I=array();$G='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$H=ibase_query($f->_link,$G);while($J=ibase_fetch_assoc($H))$I[trim($J['FIELD_NAME'])]=array("field"=>trim($J["FIELD_NAME"]),"full_type"=>trim($J["FIELD_TYPE"]),"type"=>trim($J["FIELD_SUB_TYPE"]),"default"=>trim($J['FIELD_DEFAULT_VALUE']),"null"=>(trim($J["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($J["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($J["FIELD_DESCRIPTION"]),);return$I;}function
indexes($R,$g=null){$I=array();return$I;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$f;return
h($f->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Qg){return
true;}function
support($Pc){return
preg_match("~^(columns|sql|status|table)$~",$Pc);}$x="firebird";$mf=array("=");$id=array();$od=array();$mc=array();}$ec["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Xf=array("SimpleXML + allow_url_fopen");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')&&ini_bool('allow_url_fopen')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($j){return($j=="domain");}function
query($G,$qi=false){$Ef=array('SelectExpression'=>$G,'ConsistentRead'=>'true');if($this->next)$Ef['NextToken']=$this->next;$H=sdb_request_all('Select','Item',$Ef,$this->timeout);if($H===false)return$H;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$G)){$yh=0;foreach($H
as$Wd)$yh+=$Wd->Attribute->Value;$H=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$yh,))));}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($H){foreach($H
as$Wd){$J=array();if($Wd->Name!='')$J['itemName()']=(string)$Wd->Name;foreach($Wd->Attribute
as$Ia){$C=$this->_processValue($Ia->Name);$Y=$this->_processValue($Ia->Value);if(isset($J[$C])){$J[$C]=(array)$J[$C];$J[$C][]=$Y;}else$J[$C]=$Y;}$this->_rows[]=$J;foreach($J
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($pc){return(is_object($pc)&&$pc['encoding']=='base64'?base64_decode($pc):(string)$pc);}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$y=>$X)$I[$y]=$J[$y];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$ce=array_keys($this->_rows[0]);return(object)array('name'=>$ce[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$ag="itemName()";function
_chunkRequest($_d,$va,$Ef,$Ec=array()){global$f;foreach(array_chunk($_d,25)as$hb){$Ff=$Ef;foreach($hb
as$s=>$t){$Ff["Item.$s.ItemName"]=$t;foreach($Ec
as$y=>$X)$Ff["Item.$s.$y"]=$X;}if(!sdb_request($va,$Ff))return
false;}$f->affected_rows=count($_d);return
true;}function
_extractIds($R,$mg,$z){$I=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$mg,$xe))$I=array_map('idf_unescape',$xe[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$mg.($z?" LIMIT 1":"")))as$Wd)$I[]=$Wd->Name;}return$I;}function
select($R,$L,$Z,$ld,$rf=array(),$z=1,$E=0,$cg=false){global$f;$f->next=$_GET["next"];$I=parent::select($R,$L,$Z,$ld,$rf,$z,$E,$cg);$f->next=0;return$I;}function
delete($R,$mg,$z=0){return$this->_chunkRequest($this->_extractIds($R,$mg,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$O,$mg,$z=0,$M="\n"){$Tb=array();$Nd=array();$s=0;$_d=$this->_extractIds($R,$mg,$z);$t=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$_d))$Tb["Attribute.".count($Tb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Yd=>$W){$Nd["Attribute.$s.Name"]=$y;$Nd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Yd)$Nd["Attribute.$s.Replace"]="true";$s++;}}}$Ef=array('DomainName'=>$R);return(!$Nd||$this->_chunkRequest(($t!=""?array($t):$_d),'BatchPutAttributes',$Ef,$Nd))&&(!$Tb||$this->_chunkRequest($_d,'BatchDeleteAttributes',$Ef,$Tb));}function
insert($R,$O){$Ef=array("DomainName"=>$R);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$Ef["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$Ef["Attribute.$s.Name"]=$C;$Ef["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$Ef);}function
insertUpdate($R,$K,$ag){foreach($K
as$O){if(!$this->update($R,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Pc){return
preg_match('~sql~',$Pc);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($l,$pb){}function
tables_list(){global$f;$I=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$I[(string)$R]='table';if($f->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$I;}function
table_status($C="",$Oc=false){$I=array();foreach(($C!=""?array($C=>true):tables_list())as$R=>$U){$J=array("Name"=>$R,"Auto_increment"=>"");if(!$Oc){$Je=sdb_request('DomainMetadata',array('DomainName'=>$R));if($Je){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$J[$y]=(string)$Je->$X;}}if($C!="")return$J;$I[$R]=$J;}return$I;}function
explain($f,$G){}function
error(){global$f;return
h($f->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$g=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($G,$Z,$z,$D=0,$M=" "){return" $G$Z".($z!==null?$M."LIMIT $z":"");}function
unconvert_field($n,$I){return$I;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$C,$o,$bd,$ub,$uc,$ob,$La,$Kf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($k){foreach($k
as$l)return
array($l=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Ba,$Kb,$y,$qg=false){$Ua=64;if(strlen($y)>$Ua)$y=pack("H*",$Ba($y));$y=str_pad($y,$Ua,"\0");$Zd=$y^str_repeat("\x36",$Ua);$ae=$y^str_repeat("\x5C",$Ua);$I=$Ba($ae.pack("H*",$Ba($Zd.$Kb)));if($qg)$I=pack("H*",$I);return$I;}function
sdb_request($va,$Ef=array()){global$b,$f;list($xd,$Ef['AWSAccessKeyId'],$Tg)=$b->credentials();$Ef['Action']=$va;$Ef['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$Ef['Version']='2009-04-15';$Ef['SignatureVersion']=2;$Ef['SignatureMethod']='HmacSHA1';ksort($Ef);$G='';foreach($Ef
as$y=>$X)$G.='&'.rawurlencode($y).'='.rawurlencode($X);$G=str_replace('%7E','~',substr($G,1));$G.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$xd)."\n/\n$G",$Tg,true)));@ini_set('track_errors',1);$Tc=@file_get_contents((preg_match('~^https?://~',$xd)?$xd:"http://$xd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$G,'ignore_errors'=>1,))));if(!$Tc){$f->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Zi=simplexml_load_string($Tc);if(!$Zi){$m=libxml_get_last_error();$f->error=$m->message;return
false;}if($Zi->Errors){$m=$Zi->Errors->Error;$f->error="$m->Message ($m->Code)";return
false;}$f->error='';$Ih=$va."Result";return($Zi->$Ih?$Zi->$Ih:true);}function
sdb_request_all($va,$Ih,$Ef=array(),$Rh=0){$I=array();$qh=($Rh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$Ef['SelectExpression'],$B)?$B[1]:0);do{$Zi=sdb_request($va,$Ef);if(!$Zi)break;foreach($Zi->$Ih
as$pc)$I[]=$pc;if($z&&count($I)>=$z){$_GET["next"]=$Zi->NextToken;break;}if($Rh&&microtime(true)-$qh>$Rh)return
false;$Ef['NextToken']=$Zi->NextToken;if($z)$Ef['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($I),$Ef['SelectExpression']);}while($Zi->NextToken);return$I;}$x="simpledb";$mf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$id=array();$od=array("count");$mc=array(array("json"));}$ec["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Xf=array("mongo","mongodb");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$F){global$b;$l=$b->database();$pf=array();if($V!=""){$pf["username"]=$V;$pf["password"]=$F;}if($l!="")$pf["db"]=$l;try{$this->_link=@new
MongoClient("mongodb://$N",$pf);return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
query($G){return
false;}function
select_db($j){try{$this->_db=$this->_link->selectDB($j);return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($H){foreach($H
as$Wd){$J=array();foreach($Wd
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$J[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$J;foreach($J
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$y=>$X)$I[$y]=$J[$y];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$ce=array_keys($this->_rows[0]);$C=$ce[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}class
Min_Driver
extends
Min_SQL{public$ag="_id";function
select($R,$L,$Z,$ld,$rf=array(),$z=1,$E=0,$cg=false){$L=($L==array("*")?array():array_fill_keys($L,true));$ih=array();foreach($rf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Db);$ih[$X]=($Db?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$L)->sort($ih)->limit($z!=""?+$z:0)->skip($E*$z));}function
insert($R,$O){try{$I=$this->_conn->_db->selectCollection($R)->insert($O);$this->_conn->errno=$I['code'];$this->_conn->error=$I['err'];$this->_conn->last_id=$O['_id'];return!$I['err'];}catch(Exception$Ac){$this->_conn->error=$Ac->getMessage();return
false;}}}function
get_databases($ad){global$f;$I=array();$Pb=$f->_link->listDBs();foreach($Pb['databases']as$l)$I[]=$l['name'];return$I;}function
count_tables($k){global$f;$I=array();foreach($k
as$l)$I[$l]=count($f->_link->selectDB($l)->getCollectionNames(true));return$I;}function
tables_list(){global$f;return
array_fill_keys($f->_db->getCollectionNames(true),'table');}function
drop_databases($k){global$f;foreach($k
as$l){$Cg=$f->_link->selectDB($l)->drop();if(!$Cg['ok'])return
false;}return
true;}function
indexes($R,$g=null){global$f;$I=array();foreach($f->_db->selectCollection($R)->getIndexInfo()as$v){$Wb=array();foreach($v["key"]as$d=>$U)$Wb[]=($U==-1?'1':null);$I[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Wb,);}return$I;}function
fields($R){return
fields_from_edit();}function
found_rows($S,$Z){global$f;return$f->_db->selectCollection($_GET["select"])->count($Z);}$mf=array("=");}elseif(class_exists('MongoDB\Driver\Manager')){class
Min_DB{var$extension="MongoDB",$error,$last_id;var$_link;var$_db,$_db_name;function
connect($N,$V,$F){global$b;$l=$b->database();$pf=array();if($V!=""){$pf["username"]=$V;$pf["password"]=$F;}if($l!="")$pf["db"]=$l;try{$jb='MongoDB\Driver\Manager';$this->_link=new$jb("mongodb://$N",$pf);return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
query($G){return
false;}function
select_db($j){try{$this->_db_name=$j;return
true;}catch(Exception$Ac){$this->error=$Ac->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($H){foreach($H
as$Wd){$J=array();foreach($Wd
as$y=>$X){if(is_a($X,'MongoDB\BSON\Binary'))$this->_charset[$y]=63;$J[$y]=(is_a($X,'MongoDB\BSON\ObjectID')?'MongoDB\BSON\ObjectID("'.strval($X).'")':(is_a($X,'MongoDB\BSON\UTCDatetime')?$X->toDateTime()->format('Y-m-d H:i:s'):(is_a($X,'MongoDB\BSON\Binary')?$X->bin:(is_a($X,'MongoDB\BSON\Regex')?strval($X):(is_object($X)?json_encode($X,256):$X)))));}$this->_rows[]=$J;foreach($J
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=$H->count;}function
fetch_assoc(){$J=current($this->_rows);if(!$J)return$J;$I=array();foreach($this->_rows[0]as$y=>$X)$I[$y]=$J[$y];next($this->_rows);return$I;}function
fetch_row(){$I=$this->fetch_assoc();if(!$I)return$I;return
array_values($I);}function
fetch_field(){$ce=array_keys($this->_rows[0]);$C=$ce[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}class
Min_Driver
extends
Min_SQL{public$ag="_id";function
select($R,$L,$Z,$ld,$rf=array(),$z=1,$E=0,$cg=false){global$f;$L=($L==array("*")?array():array_fill_keys($L,1));if(count($L)&&!isset($L['_id']))$L['_id']=0;$Z=where_to_query($Z);$ih=array();foreach($rf
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Db);$ih[$X]=($Db?-1:1);}if(isset($_GET['limit'])&&is_numeric($_GET['limit'])&&$_GET['limit']>0)$z=$_GET['limit'];$z=min(200,max(1,(int)$z));$gh=$E*$z;$jb='MongoDB\Driver\Query';$G=new$jb($Z,array('projection'=>$L,'limit'=>$z,'skip'=>$gh,'sort'=>$ih));$Fg=$f->_link->executeQuery("$f->_db_name.$R",$G);return
new
Min_Result($Fg);}function
update($R,$O,$mg,$z=0,$M="\n"){global$f;$l=$f->_db_name;$Z=sql_query_where_parser($mg);$jb='MongoDB\Driver\BulkWrite';$Ya=new$jb(array());if(isset($O['_id']))unset($O['_id']);$_g=array();foreach($O
as$y=>$Y){if($Y=='NULL'){$_g[$y]=1;unset($O[$y]);}}$xi=array('$set'=>$O);if(count($_g))$xi['$unset']=$_g;$Ya->update($Z,$xi,array('upsert'=>false));$Fg=$f->_link->executeBulkWrite("$l.$R",$Ya);$f->affected_rows=$Fg->getModifiedCount();return
true;}function
delete($R,$mg,$z=0){global$f;$l=$f->_db_name;$Z=sql_query_where_parser($mg);$jb='MongoDB\Driver\BulkWrite';$Ya=new$jb(array());$Ya->delete($Z,array('limit'=>$z));$Fg=$f->_link->executeBulkWrite("$l.$R",$Ya);$f->affected_rows=$Fg->getDeletedCount();return
true;}function
insert($R,$O){global$f;$l=$f->_db_name;$jb='MongoDB\Driver\BulkWrite';$Ya=new$jb(array());if(isset($O['_id'])&&empty($O['_id']))unset($O['_id']);$Ya->insert($O);$Fg=$f->_link->executeBulkWrite("$l.$R",$Ya);$f->affected_rows=$Fg->getInsertedCount();return
true;}}function
get_databases($ad){global$f;$I=array();$jb='MongoDB\Driver\Command';$sb=new$jb(array('listDatabases'=>1));$Fg=$f->_link->executeCommand('admin',$sb);foreach($Fg
as$Pb){foreach($Pb->databases
as$l)$I[]=$l->name;}return$I;}function
count_tables($k){$I=array();return$I;}function
tables_list(){global$f;$jb='MongoDB\Driver\Command';$sb=new$jb(array('listCollections'=>1));$Fg=$f->_link->executeCommand($f->_db_name,$sb);$qb=array();foreach($Fg
as$H)$qb[$H->name]='table';return$qb;}function
drop_databases($k){return
false;}function
indexes($R,$g=null){global$f;$I=array();$jb='MongoDB\Driver\Command';$sb=new$jb(array('listIndexes'=>$R));$Fg=$f->_link->executeCommand($f->_db_name,$sb);foreach($Fg
as$v){$Wb=array();$e=array();foreach(get_object_vars($v->key)as$d=>$U){$Wb[]=($U==-1?'1':null);$e[]=$d;}$I[$v->name]=array("type"=>($v->name=="_id_"?"PRIMARY":(isset($v->unique)?"UNIQUE":"INDEX")),"columns"=>$e,"lengths"=>array(),"descs"=>$Wb,);}return$I;}function
fields($R){$o=fields_from_edit();if(!count($o)){global$dc;$H=$dc->select($R,array("*"),null,null,array(),10);while($J=$H->fetch_assoc()){foreach($J
as$y=>$X){$J[$y]=null;$o[$y]=array("field"=>$y,"type"=>"string","null"=>($y!=$dc->primary),"auto_increment"=>($y==$dc->primary),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1,),);}}}return$o;}function
found_rows($S,$Z){global$f;$Z=where_to_query($Z);$jb='MongoDB\Driver\Command';$sb=new$jb(array('count'=>$S['Name'],'query'=>$Z));$Fg=$f->_link->executeCommand($f->_db_name,$sb);$Zh=$Fg->toArray();return$Zh[0]->n;}function
sql_query_where_parser($mg){$mg=trim(preg_replace('/WHERE[\s]?[(]?\(?/','',$mg));$mg=preg_replace('/\)\)\)$/',')',$mg);$Wi=explode(' AND ',$mg);$Xi=explode(') OR (',$mg);$Z=array();foreach($Wi
as$Ui)$Z[]=trim($Ui);if(count($Xi)==1)$Xi=array();elseif(count($Xi)>1)$Z=array();return
where_to_query($Z,$Xi);}function
where_to_query($Si=array(),$Ti=array()){global$mf;$Kb=array();foreach(array('and'=>$Si,'or'=>$Ti)as$U=>$Z){if(is_array($Z)){foreach($Z
as$Hc){list($mb,$kf,$X)=explode(" ",$Hc,3);if($mb=="_id"){$X=str_replace('MongoDB\BSON\ObjectID("',"",$X);$X=str_replace('")',"",$X);$jb='MongoDB\BSON\ObjectID';$X=new$jb($X);}if(!in_array($kf,$mf))continue;if(preg_match('~^\(f\)(.+)~',$kf,$B)){$X=(float)$X;$kf=$B[1];}elseif(preg_match('~^\(date\)(.+)~',$kf,$B)){$Mb=new
DateTime($X);$jb='MongoDB\BSON\UTCDatetime';$X=new$jb($Mb->getTimestamp()*1000);$kf=$B[1];}switch($kf){case'=':$kf='$eq';break;case'!=':$kf='$ne';break;case'>':$kf='$gt';break;case'<':$kf='$lt';break;case'>=':$kf='$gte';break;case'<=':$kf='$lte';break;case'regex':$kf='$regex';break;default:continue;}if($U=='and')$Kb['$and'][]=array($mb=>array($kf=>$X));elseif($U=='or')$Kb['$or'][]=array($mb=>array($kf=>$X));}}}return$Kb;}$mf=array("=","!=",">","<",">=","<=","regex","(f)=","(f)!=","(f)>","(f)<","(f)>=","(f)<=","(date)=","(date)!=","(date)>","(date)<","(date)>=","(date)<=",);}function
table($u){return$u;}function
idf_escape($u){return$u;}function
table_status($C="",$Oc=false){$I=array();foreach(tables_list()as$R=>$U){$I[$R]=array("Name"=>$R);if($C==$R)return$I[$R];}return$I;}function
last_id(){global$f;return$f->last_id;}function
error(){global$f;return
h($f->error);}function
collations(){return
array();}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
connect(){global$b;$f=new
Min_DB;$i=$b->credentials();if($f->connect($i[0],$i[1],$i[2]))return$f;return$f->error;}function
alter_indexes($R,$c){global$f;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$I=$f->_db->command(array("deleteIndexes"=>$R,"index"=>$C));else{$e=array();foreach($O
as$d){$d=preg_replace('~ DESC$~','',$d,1,$Db);$e[$d]=($Db?-1:1);}$I=$f->_db->selectCollection($R)->ensureIndex($e,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($I['errmsg']){$f->error=$I['errmsg'];return
false;}}return
true;}function
support($Pc){return
preg_match("~database|indexes~",$Pc);}function
db_collation($l,$pb){}function
information_schema(){}function
is_view($S){}function
convert_field($n){}function
unconvert_field($n,$I){return$I;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$C,$o,$bd,$ub,$uc,$ob,$La,$Kf){global$f;if($R==""){$f->_db->createCollection($C);return
true;}}function
drop_tables($T){global$f;foreach($T
as$R){$Cg=$f->_db->selectCollection($R)->drop();if(!$Cg['ok'])return
false;}return
true;}function
truncate_tables($T){global$f;foreach($T
as$R){$Cg=$f->_db->selectCollection($R)->remove();if(!$Cg['ok'])return
false;}return
true;}$x="mongo";$id=array();$od=array();$mc=array(array("json"));}$ec["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Xf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Of,$zb=array(),$Ke='GET'){@ini_set('track_errors',1);$Tc=@file_get_contents("$this->_url/".ltrim($Of,'/'),false,stream_context_create(array('http'=>array('method'=>$Ke,'content'=>$zb===null?$zb:json_encode($zb),'header'=>'Content-Type: application/json','ignore_errors'=>1,))));if(!$Tc){$this->error=$php_errormsg;return$Tc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Tc;return
false;}$I=json_decode($Tc,true);if($I===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$yb=get_defined_constants(true);foreach($yb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$I;}function
query($Of,$zb=array(),$Ke='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Of,'/'),$zb,$Ke);}function
connect($N,$V,$F){preg_match('~^(https?://)?(.*)~',$N,$B);$this->_url=($B[1]?$B[1]:"http://")."$V:$F@$B[2]";$I=$this->query('');if($I)$this->server_info=$I['version']['number'];return(bool)$I;}function
select_db($j){$this->_db=$j;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($K){$this->num_rows=count($this->_rows);$this->_rows=$K;reset($this->_rows);}function
fetch_assoc(){$I=current($this->_rows);next($this->_rows);return$I;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$L,$Z,$ld,$rf=array(),$z=1,$E=0,$cg=false){global$b;$Kb=array();$G="$R/_search";if($L!=array("*"))$Kb["fields"]=$L;if($rf){$ih=array();foreach($rf
as$mb){$mb=preg_replace('~ DESC$~','',$mb,1,$Db);$ih[]=($Db?array($mb=>"desc"):$mb);}$Kb["sort"]=$ih;}if($z){$Kb["size"]=+$z;if($E)$Kb["from"]=($E*$z);}foreach($Z
as$X){list($mb,$kf,$X)=explode(" ",$X,3);if($mb=="_id")$Kb["query"]["ids"]["values"][]=$X;elseif($mb.$X!=""){$Mh=array("term"=>array(($mb!=""?$mb:"_all")=>$X));if($kf=="=")$Kb["query"]["filtered"]["filter"]["and"][]=$Mh;else$Kb["query"]["filtered"]["query"]["bool"]["must"][]=$Mh;}}if($Kb["query"]&&!$Kb["query"]["filtered"]["query"]&&!$Kb["query"]["ids"])$Kb["query"]["filtered"]["query"]=array("match_all"=>array());$qh=microtime(true);$Sg=$this->_conn->query($G,$Kb);if($cg)echo$b->selectQuery("$G: ".print_r($Kb,true),$qh,!$Sg);if(!$Sg)return
false;$I=array();foreach($Sg['hits']['hits']as$wd){$J=array();if($L==array("*"))$J["_id"]=$wd["_id"];$o=$wd['_source'];if($L!=array("*")){$o=array();foreach($L
as$y)$o[$y]=$wd['fields'][$y];}foreach($o
as$y=>$X){if($Kb["fields"])$X=$X[0];$J[$y]=(is_array($X)?json_encode($X):$X);}$I[]=$J;}return
new
Min_Result($I);}function
update($U,$rg,$mg){$Mf=preg_split('~ *= *~',$mg);if(count($Mf)==2){$t=trim($Mf[1]);$G="$U/$t";return$this->_conn->query($G,$rg,'POST');}return
false;}function
insert($U,$rg){$t="";$G="$U/$t";$Cg=$this->_conn->query($G,$rg,'POST');$this->_conn->last_id=$Cg['_id'];return$Cg['created'];}function
delete($U,$mg){$_d=array();if(is_array($_GET["where"])&&$_GET["where"]["_id"])$_d[]=$_GET["where"]["_id"];if(is_array($_POST['check'])){foreach($_POST['check']as$cb){$Mf=preg_split('~ *= *~',$cb);if(count($Mf)==2)$_d[]=trim($Mf[1]);}}$this->_conn->affected_rows=0;foreach($_d
as$t){$G="{$U}/{$t}";$Cg=$this->_conn->query($G,'{}','DELETE');if(is_array($Cg)&&$Cg['found']==true)$this->_conn->affected_rows++;}return$this->_conn->affected_rows;}}function
connect(){global$b;$f=new
Min_DB;$i=$b->credentials();if($f->connect($i[0],$i[1],$i[2]))return$f;return$f->error;}function
support($Pc){return
preg_match("~database|table|columns~",$Pc);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){global$f;$I=$f->rootQuery('_aliases');if($I){$I=array_keys($I);sort($I,SORT_STRING);}return$I;}function
collations(){return
array();}function
db_collation($l,$pb){}function
engines(){return
array();}function
count_tables($k){global$f;$I=array();$H=$f->query('_stats');if($H&&$H['indices']){$Gd=$H['indices'];foreach($Gd
as$Fd=>$rh){$Ed=$rh['total']['indexing'];$I[$Fd]=$Ed['index_total'];}}return$I;}function
tables_list(){global$f;$I=$f->query('_mapping');if($I)$I=array_fill_keys(array_keys($I[$f->_db]["mappings"]),'table');return$I;}function
table_status($C="",$Oc=false){global$f;$Sg=$f->query("_search",array("size"=>0,"aggregations"=>array("count_by_type"=>array("terms"=>array("field"=>"_type")))),"POST");$I=array();if($Sg){$T=$Sg["aggregations"]["count_by_type"]["buckets"];foreach($T
as$R){$I[$R["key"]]=array("Name"=>$R["key"],"Engine"=>"table","Rows"=>$R["doc_count"],);if($C!=""&&$C==$R["key"])return$I[$C];}}return$I;}function
error(){global$f;return
h($f->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$g=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$f;$H=$f->query("$R/_mapping");$I=array();if($H){$ue=$H[$R]['properties'];if(!$ue)$ue=$H[$f->_db]['mappings'][$R]['properties'];if($ue){foreach($ue
as$C=>$n){$I[$C]=array("field"=>$C,"full_type"=>$n["type"],"type"=>$n["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($n["properties"]){unset($I[$C]["privileges"]["insert"]);unset($I[$C]["privileges"]["update"]);}}}}return$I;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($n){}function
unconvert_field($n,$I){return$I;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($l){global$f;return$f->rootQuery(urlencode($l),null,'PUT');}function
drop_databases($k){global$f;return$f->rootQuery(urlencode(implode(',',$k)),array(),'DELETE');}function
alter_table($R,$C,$o,$bd,$ub,$uc,$ob,$La,$Kf){global$f;$ig=array();foreach($o
as$Mc){$Rc=trim($Mc[1][0]);$Sc=trim($Mc[1][1]?$Mc[1][1]:"text");$ig[$Rc]=array('type'=>$Sc);}if(!empty($ig))$ig=array('properties'=>$ig);return$f->query("_mapping/{$C}",$ig,'PUT');}function
drop_tables($T){global$f;$I=true;foreach($T
as$R)$I=$I&&$f->query(urlencode($R),array(),'DELETE');return$I;}function
last_id(){global$f;return$f->last_id;}$x="elastic";$mf=array("=","query");$id=array();$od=array();$mc=array(array("json"));$pi=array();$uh=array();foreach(array('ÄŒÃ­sla'=>array("long"=>3,"integer"=>5,"short"=>8,"byte"=>10,"double"=>20,"float"=>66,"half_float"=>12,"scaled_float"=>21),'Datum a Äas'=>array("date"=>10),'Å˜etÄ›zce'=>array("string"=>65535,"text"=>65535),'BinÃ¡rnÃ­'=>array("binary"=>255),)as$y=>$X){$pi+=$X;$uh[$y]=array_keys($X);}}$ec=array("server"=>"MySQL")+$ec;if(!defined("DRIVER")){$Xf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$F="",$j=null,$Tf=null,$hh=null){mysqli_report(MYSQLI_REPORT_OFF);list($xd,$Tf)=explode(":",$N,2);$I=@$this->real_connect(($N!=""?$xd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$F!=""?$F:ini_get("mysqli.default_pw")),$j,(is_numeric($Tf)?$Tf:ini_get("mysqli.default_port")),(!is_numeric($Tf)?$Tf:$hh));return$I;}function
set_charset($bb){if(parent::set_charset($bb))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $bb");}function
result($G,$n=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch_array();return$J[$n];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$F){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($bb){if(function_exists('mysql_set_charset')){if(mysql_set_charset($bb,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $bb");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($j){return
mysql_select_db($j,$this->_link);}function
query($G,$qi=false){$H=@($qi?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));$this->error="";if(!$H){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$n=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
mysql_result($H->_result,0,$n);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$F){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$F);return
true;}function
set_charset($bb){$this->query("SET NAMES $bb");}function
select_db($j){return$this->query("USE ".idf_escape($j));}function
query($G,$qi=false){$this->setAttribute(1000,!$qi);return
parent::query($G,$qi);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$K,$ag){$e=array_keys(reset($K));$Yf="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$Hi=array();foreach($e
as$y)$Hi[$y]="$y = VALUES($y)";$xh="\nON DUPLICATE KEY UPDATE ".implode(", ",$Hi);$Hi=array();$oe=0;foreach($K
as$O){$Y="(".implode(", ",$O).")";if($Hi&&(strlen($Yf)+$oe+strlen($Y)+strlen($xh)>1e6)){if(!queries($Yf.implode(",\n",$Hi).$xh))return
false;$Hi=array();$oe=0;}$Hi[]=$Y;$oe+=strlen($Y)+2;}return
queries($Yf.implode(",\n",$Hi).$xh);}function
warnings(){$H=$this->_conn->query("SHOW WARNINGS");if($H&&$H->num_rows){ob_start();select($H);return
ob_get_clean();}}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$pi,$uh;$f=new
Min_DB;$i=$b->credentials();if($f->connect($i[0],$i[1],$i[2])){$f->set_charset(charset($f));$f->query("SET sql_quote_show_create = 1, autocommit = 1");if(min_version('5.7.8',10.2,$f)){$uh['Å˜etÄ›zce'][]="json";$pi["json"]=4294967295;}return$f;}$I=$f->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($Og=iconv("windows-1250","utf-8",$I))>strlen($I))$I=$Og;return$I;}function
get_databases($ad){$I=get_session("dbs");if($I===null){$G=(min_version(5)?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$I=($ad?slow_query($G):get_vals($G));restart_session();set_session("dbs",$I);stop_session();}return$I;}function
limit($G,$Z,$z,$D=0,$M=" "){return" $G$Z".($z!==null?$M."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($R,$G,$Z,$M="\n"){return
limit($G,$Z,1,0,$M);}function
db_collation($l,$pb){global$f;$I=null;$h=$f->result("SHOW CREATE DATABASE ".idf_escape($l),1);if(preg_match('~ COLLATE ([^ ]+)~',$h,$B))$I=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$h,$B))$I=$pb[$B[1]][-1];return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(preg_match("~YES|DEFAULT~",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
logged_user(){global$f;return$f->result("SELECT USER()");}function
tables_list(){return
get_key_vals(min_version(5)?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($k){$I=array();foreach($k
as$l)$I[$l]=count(get_vals("SHOW TABLES IN ".idf_escape($l)));return$I;}function
table_status($C="",$Oc=false){$I=array();foreach(get_rows($Oc&&min_version(5)?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);if(!isset($J["Engine"]))$J["Comment"]="";if($C!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&min_version(5.6));}function
fields($R){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$B);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($J["Default"]!=""||preg_match("~char|set~",$B[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$J["Extra"],$B)?$B[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(preg_split('~, *~',$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($R,$g=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$g)as$J){$C=$J["Key_name"];$I[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?($J["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$I[$C]["columns"][]=$J["Column_name"];$I[$C]["lengths"][]=($J["Index_type"]=="SPATIAL"?null:$J["Sub_part"]);$I[$C]["descs"][]=null;}return$I;}function
foreign_keys($R){global$f,$hf;static$Qf='`(?:[^`]|``)+`';$I=array();$Eb=$f->result("SHOW CREATE TABLE ".table($R),1);if($Eb){preg_match_all("~CONSTRAINT ($Qf) FOREIGN KEY ?\\(((?:$Qf,? ?)+)\\) REFERENCES ($Qf)(?:\\.($Qf))? \\(((?:$Qf,? ?)+)\\)(?: ON DELETE ($hf))?(?: ON UPDATE ($hf))?~",$Eb,$xe,PREG_SET_ORDER);foreach($xe
as$B){preg_match_all("~$Qf~",$B[2],$jh);preg_match_all("~$Qf~",$B[5],$Jh);$I[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$jh[0]),"target"=>array_map('idf_unescape',$Jh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$I;}function
view($C){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$y=>$X)asort($I[$y]);return$I;}function
information_schema($l){return(min_version(5)&&$l=="information_schema")||(min_version(5.5)&&$l=="performance_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
create_database($l,$ob){return
queries("CREATE DATABASE ".idf_escape($l).($ob?" COLLATE ".q($ob):""));}function
drop_databases($k){$I=apply_queries("DROP DATABASE",$k,'idf_escape');restart_session();set_session("dbs",null);return$I;}function
rename_database($C,$ob){$I=false;if(create_database($C,$ob)){$Ag=array();foreach(tables_list()as$R=>$U)$Ag[]=table($R)." TO ".idf_escape($C).".".table($R);$I=(!$Ag||queries("RENAME TABLE ".implode(", ",$Ag)));if($I)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$I;}function
auto_increment(){$Ma=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Ma="";break;}if($v["type"]=="PRIMARY")$Ma=" UNIQUE";}}return" AUTO_INCREMENT$Ma";}function
alter_table($R,$C,$o,$bd,$ub,$uc,$ob,$La,$Kf){$c=array();foreach($o
as$n)$c[]=($n[1]?($R!=""?($n[0]!=""?"CHANGE ".idf_escape($n[0]):"ADD"):" ")." ".implode($n[1]).($R!=""?$n[2]:""):"DROP ".idf_escape($n[0]));$c=array_merge($c,$bd);$P=($ub!==null?" COMMENT=".q($ub):"").($uc?" ENGINE=".q($uc):"").($ob?" COLLATE ".q($ob):"").($La!=""?" AUTO_INCREMENT=$La":"");if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$P$Kf");if($R!=$C)$c[]="RENAME TO ".table($C);if($P)$c[]=ltrim($P);return($c||$Kf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$Kf):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Mi){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Mi,$Jh){$Ag=array();foreach(array_merge($T,$Mi)as$R)$Ag[]=table($R)." TO ".idf_escape($Jh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$Ag));}function
copy_tables($T,$Mi,$Jh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($Jh==DB?table("copy_$R"):idf_escape($Jh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($Mi
as$R){$C=($Jh==DB?table("copy_$R"):idf_escape($Jh).".".table($R));$Li=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Li[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($K);}function
triggers($R){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$f,$wc,$Ld,$pi;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$kh="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$oi="((".implode("|",array_merge(array_keys($pi),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$wc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Qf="$kh*(".($U=="FUNCTION"?"":$Ld).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$oi";$h=$f->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$Qf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$oi\\s+":"")."(.*)~is",$h,$B);$o=array();preg_match_all("~$Qf\\s*,?~is",$B[1],$xe,PREG_SET_ORDER);foreach($xe
as$Df){$C=str_replace("``","`",$Df[2]).$Df[3];$o[]=array("field"=>$C,"type"=>strtolower($Df[5]),"length"=>preg_replace_callback("~$wc~s",'normalize_enum',$Df[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Df[8] $Df[7]"))),"null"=>1,"full_type"=>$Df[4],"inout"=>strtoupper($Df[1]),"collation"=>strtolower($Df[9]),);}if($U!="FUNCTION")return
array("fields"=>$o,"definition"=>$B[11]);return
array("fields"=>$o,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME AS SPECIFIC_NAME, ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
routine_id($C,$J){return
idf_escape($C);}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ID()");}function
explain($f,$G){return$f->query("EXPLAIN ".(min_version(5.1)?"PARTITIONS ":"").$G);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Qg){return
true;}function
create_sql($R,$La,$vh){global$f;$I=$f->result("SHOW CREATE TABLE ".table($R),1);if(!$La)$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);return$I;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($j){return"USE ".idf_escape($j);}function
trigger_sql($R){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$J)$I.="\nCREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($n){if(preg_match("~binary~",$n["type"]))return"HEX(".idf_escape($n["field"]).")";if($n["type"]=="bit")return"BIN(".idf_escape($n["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))return(min_version(8)?"ST_":"")."AsWKT(".idf_escape($n["field"]).")";}function
unconvert_field($n,$I){if(preg_match("~binary~",$n["type"]))$I="UNHEX($I)";if($n["type"]=="bit")$I="CONV($I, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))$I="GeomFromText($I)";return$I;}function
support($Pc){return!preg_match("~scheme|sequence|type|view_trigger|materializedview".(min_version(5.1)?"":"|event|partitioning".(min_version(5)?"":"|routine|trigger|view"))."~",$Pc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$f;return$f->result("SELECT @@max_connections");}$x="sql";$pi=array();$uh=array();foreach(array('ÄŒÃ­sla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum a Äas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Å˜etÄ›zce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Seznamy'=>array("enum"=>65535,"set"=>64),'BinÃ¡rnÃ­'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometrie'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$pi+=$X;$uh[$y]=array_keys($X);}$wi=array("unsigned","zerofill","unsigned zerofill");$mf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","FIND_IN_SET","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$id=array("char_length","date","from_unixtime","lower","round","floor","ceil","sec_to_time","time_to_sec","upper");$od=array("avg","count","count distinct","group_concat","max","min","sum");$mc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.6.0";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/'".target_blank()." id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($h=false){return
password_file($h);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($ad=true){return
get_databases($ad);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){}function
csp(){return
csp();}function
head(){return
true;}function
css(){$I=array();$Uc="adminer.css";if(file_exists($Uc))$I[]=$Uc;return$I;}function
loginForm(){global$ec;echo'<table cellspacing="0">
<tr><th>SystÃ©m<td>',html_select("auth[driver]",$ec,DRIVER)."\n",'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>UÅ¾ivatel<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Heslo<td><input type="password" name="auth[password]">
<tr><th>DatabÃ¡ze<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
',script("focus(qs('#username'));"),"<p><input type='submit' value='".'PÅ™ihlÃ¡sit se'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'TrvalÃ© pÅ™ihlÃ¡Å¡enÃ­')."\n";}function
login($se,$F){global$x;if($x=="sqlite")return
sprintf('Pro pÅ™ihlÃ¡Å¡enÃ­ k SQLite <a href="https://www.adminer.org/cs/extension/"%s>implementujte</a> metodu %s.',target_blank(),'<code>login()</code>');return
true;}function
tableName($Ah){return
h($Ah["Name"]);}function
fieldName($n,$rf=0){return'<span title="'.h($n["full_type"]).'">'.h($n["field"]).'</span>';}function
selectLinks($Ah,$O=""){echo'<p class="links">';$re=array("select"=>'Vypsat data');if(support("table")||support("indexes"))$re["table"]='Zobrazit strukturu';if(support("table")){if(is_view($Ah))$re["view"]='PozmÄ›nit pohled';else$re["create"]='PozmÄ›nit tabulku';}if($O!==null)$re["edit"]='NovÃ¡ poloÅ¾ka';foreach($re
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($Ah["Name"]).($y=="edit"?$O:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$_h){return
array();}function
backwardKeysPrint($Oa,$J){}function
selectQuery($G,$qh,$Nc=false){global$x,$dc;$I="</p>\n";if(!$Nc&&($Pi=$dc->warnings())){$t="warnings";$I=", <a href='#$t'>".'VarovÃ¡nÃ­'."</a>".script("qsl('a').onclick = partial(toggle, '$t');","")."$I<div id='$t' class='hidden'>\n$Pi</div>\n";}return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$G))."</code> <span class='time'>(".format_time($qh).")</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($G)."'>".'Upravit'."</a>":"").$I;}function
sqlCommandQuery($G){return
shorten_utf8(trim($G),1000);}function
rowDescription($R){return"";}function
rowDescriptions($K,$cd){return$K;}function
selectLink($X,$n){}function
selectVal($X,$_,$n,$zf){$I=($X===null?"<i>NULL</i>":(preg_match("~char|binary|boolean~",$n["type"])&&!preg_match("~var~",$n["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$n["type"])&&!is_utf8($X))$I="<i>".lang(array('%d bajt','%d bajty','%d bajtÅ¯'),strlen($zf))."</i>";if(preg_match('~json~',$n["type"]))$I="<code class='jush-js'>$I</code>";return($_?"<a href='".h($_)."'".(is_url($_)?target_blank():"").">$I</a>":$I);}function
editVal($X,$n){return$X;}function
tableStructurePrint($o){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr><th>".'Sloupec'."<td>".'Typ'.(support("comment")?"<td>".'KomentÃ¡Å™':"")."</thead>\n";foreach($o
as$n){echo"<tr".odd()."><th>".h($n["field"]),"<td><span title='".h($n["collation"])."'>".h($n["full_type"])."</span>",($n["null"]?" <i>NULL</i>":""),($n["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($n["default"])?" <span title='".'VÃ½chozÃ­ hodnota'."'>[<b>".h($n["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($n["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($w){echo"<table cellspacing='0'>\n";foreach($w
as$C=>$v){ksort($v["columns"]);$cg=array();foreach($v["columns"]as$y=>$X)$cg[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($C)."'><th>$v[type]<td>".implode(", ",$cg)."\n";}echo"</table>\n";}function
selectColumnsPrint($L,$e){global$id,$od;print_fieldset("select",'Vypsat',$L);$s=0;$L[""]=array();foreach($L
as$y=>$X){$X=$_GET["columns"][$y];$d=select_input(" name='columns[$s][col]'",$e,$X["col"],($y!==""?"selectFieldChange":"selectAddRow"));echo"<div>".($id||$od?"<select name='columns[$s][fun]'>".optionlist(array(-1=>"")+array_filter(array('Funkce'=>$id,'Agregace'=>$od)),$X["fun"])."</select>".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).script("qsl('select').onchange = function () { helpClose();".($y!==""?"":" qsl('select, input', this.parentNode).onchange();")." };","")."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$e,$w){print_fieldset("search",'Vyhledat',$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"<div>(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."'>",script("qsl('input').oninput = selectFieldChange;",""),checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"</div>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$ab="this.parentNode.firstChild.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]'",$e,$X["col"],($X?"selectFieldChange":"selectAddRow"),"(".'kdekoliv'.")"),html_select("where[$s][op]",$this->operators,$X["op"],$ab),"<input type='search' name='where[$s][val]' value='".h($X["val"])."'>",script("mixin(qsl('input'), {oninput: function () { $ab }, onkeydown: selectSearchKeydown, onsearch: selectSearchSearch});",""),"</div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($rf,$e,$w){print_fieldset("sort",'SeÅ™adit',$rf);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]'",$e,$X,"selectFieldChange"),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),'sestupnÄ›')."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]'",$e,"","selectAddRow"),checkbox("desc[$s]",1,false,'sestupnÄ›')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."'>",script("qsl('input').oninput = selectFieldChange;",""),"</div></fieldset>\n";}function
selectLengthPrint($Ph){if($Ph!==null){echo"<fieldset><legend>".'DÃ©lka textÅ¯'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Ph)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".'Akce'."</legend><div>","<input type='submit' value='".'Vypsat'."'>"," <span id='noindex' title='".'PrÅ¯chod celÃ© tabulky'."'></span>","<script".nonce().">\n","var indexColumns = ";$e=array();foreach($w
as$v){$Jb=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Jb)$e[$Jb]=1;}$e[""]=1;foreach($e
as$y=>$X)json_row($y);echo";\n","selectFieldChange.call(qs('#form')['select']);\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($rc,$e){}function
selectColumnsProcess($e,$w){global$id,$od;$L=array();$ld=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$id)||in_array($X["fun"],$od)))){$L[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$od))$ld[]=$L[$y];}}return
array($L,$ld);}function
selectSearchProcess($o,$w){global$f,$x;$I=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$I[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if($X["op"]=="")$X["op"]="LIKE %%";if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$Yf="";$wb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$Bd=process_length($X["val"]);$wb.=" ".($Bd!=""?$Bd:"(NULL)");}elseif($X["op"]=="SQL")$wb=" $X[val]";elseif($X["op"]=="LIKE %%")$wb=" LIKE ".$this->processInput($o[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$wb=" ILIKE ".$this->processInput($o[$X["col"]],"%$X[val]%");elseif($X["op"]=="FIND_IN_SET"){$Yf="$X[op](".q($X["val"]).", ";$wb=")";}elseif(!preg_match('~NULL$~',$X["op"]))$wb.=" ".$this->processInput($o[$X["col"]],$X["val"]);if($X["col"]!="")$I[]=$Yf.idf_escape($X["col"]).$wb;else{$rb=array();foreach($o
as$C=>$n){$Ud=preg_match('~char|text|enum|set~',$n["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$n["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Ud)){$C=idf_escape($C);$rb[]=$Yf.($x=="sql"&&$Ud&&!preg_match("~^utf8~",$n["collation"])?"CONVERT($C USING ".charset($f).")":$C).$wb;}}$I[]=($rb?"(".implode(" OR ",$rb).")":"0");}}}return$I;}function
selectOrderProcess($o,$w){$I=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$I[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$I;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$cd){return
false;}function
selectQueryBuild($L,$Z,$ld,$rf,$z,$E){return"";}function
messageQuery($G,$Qh,$Nc=false){global$x,$dc;restart_session();$ud=&get_session("queries");if(!$ud[$_GET["db"]])$ud[$_GET["db"]]=array();if(strlen($G)>1e6)$G=preg_replace('~[\x80-\xFF]+$~','',substr($G,0,1e6))."\n...";$ud[$_GET["db"]][]=array($G,time(),$Qh);$oh="sql-".count($ud[$_GET["db"]]);$I="<a href='#$oh' class='toggle'>".'SQL pÅ™Ã­kaz'."</a>\n";if(!$Nc&&($Pi=$dc->warnings())){$t="warnings-".count($ud[$_GET["db"]]);$I="<a href='#$t' class='toggle'>".'VarovÃ¡nÃ­'."</a>, $I<div id='$t' class='hidden'>\n$Pi</div>\n";}return" <span class='time'>".@date("H:i:s")."</span>"." $I<div id='$oh' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($G,1000)."</code></pre>".($Qh?" <span class='time'>($Qh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($ud[$_GET["db"]])-1)).'">'.'Upravit'.'</a>':'').'</div>';}function
editFunctions($n){global$mc;$I=($n["null"]?"NULL/":"");foreach($mc
as$y=>$id){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($id
as$Qf=>$X){if(!$Qf||preg_match("~$Qf~",$n["type"]))$I.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$n["type"]))$I.="/SQL";}}if($n["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$I='Auto Increment';return
explode("/",$I);}function
editInput($R,$n,$Ja,$Y){if($n["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ja value='-1' checked><i>".'pÅ¯vodnÃ­'."</i></label> ":"").($n["null"]?"<label><input type='radio'$Ja value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ja,$n,$Y,0);return"";}function
editHint($R,$n,$Y){return"";}function
processInput($n,$Y,$r=""){if($r=="SQL")return$Y;$C=$n["field"];$I=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$I="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$I=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$I=idf_escape($C)." $r $I";elseif(preg_match('~^[+-] interval$~',$r))$I=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+\$~i",$Y)?$Y:$I);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$I="$r(".idf_escape($C).", $I)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$I="$r($I)";return
unconvert_field($n,$I);}function
dumpOutput(){$I=array('text'=>'otevÅ™Ã­t','file'=>'uloÅ¾it');if(function_exists('gzencode'))$I['gz']='gzip';return$I;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($l){}function
dumpTable($R,$vh,$Vd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($vh)dump_csv(array_keys(fields($R)));}else{if($Vd==2){$o=array();foreach(fields($R)as$C=>$n)$o[]=idf_escape($C)." $n[full_type]";$h="CREATE TABLE ".table($R)." (".implode(", ",$o).")";}else$h=create_sql($R,$_POST["auto_increment"],$vh);set_utf8mb4($h);if($vh&&$h){if($vh=="DROP+CREATE"||$Vd==1)echo"DROP ".($Vd==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Vd==1)$h=remove_definer($h);echo"$h;\n\n";}}}function
dumpData($R,$vh,$G){global$f,$x;$ze=($x=="sqlite"?0:1048576);if($vh){if($_POST["format"]=="sql"){if($vh=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$o=fields($R);}$H=$f->query($G,1);if($H){$Nd="";$Xa="";$ce=array();$xh="";$Qc=($R!=''?'fetch_assoc':'fetch_row');while($J=$H->$Qc()){if(!$ce){$Hi=array();foreach($J
as$X){$n=$H->fetch_field();$ce[]=$n->name;$y=idf_escape($n->name);$Hi[]="$y = VALUES($y)";}$xh=($vh=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Hi):"").";\n";}if($_POST["format"]!="sql"){if($vh=="table"){dump_csv($ce);$vh="INSERT";}dump_csv($J);}else{if(!$Nd)$Nd="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$ce)).") VALUES";foreach($J
as$y=>$X){$n=$o[$y];$J[$y]=($X!==null?unconvert_field($n,preg_match('~(^|[^o])int|float|double|decimal~',$n["type"])&&$X!=''?$X:q($X)):"NULL");}$Og=($ze?"\n":" ")."(".implode(",\t",$J).")";if(!$Xa)$Xa=$Nd.$Og;elseif(strlen($Xa)+4+strlen($Og)+strlen($xh)<$ze)$Xa.=",$Og";else{echo$Xa.$xh;$Xa=$Nd.$Og;}}}if($Xa)echo$Xa.$xh;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$f->error)."\n";}}function
dumpFilename($zd){return
friendly_url($zd!=""?$zd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($zd,$Ne=false){$Bf=$_POST["output"];$Ic=(preg_match('~sql~',$_POST["format"])?"sql":($Ne?"tar":"csv"));header("Content-Type: ".($Bf=="gz"?"application/x-gzip":($Ic=="tar"?"application/x-tar":($Ic=="sql"||$Bf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($Bf=="gz")ob_start('ob_gzencode',1e6);return$Ic;}function
importServerPath(){return"adminer.sql";}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.'PozmÄ›nit databÃ¡zi'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'PozmÄ›nit schÃ©ma':'VytvoÅ™it schÃ©ma')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'SchÃ©ma databÃ¡ze'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'OprÃ¡vnÄ›nÃ­'."</a>\n":"");return
true;}function
navigation($Me){global$ia,$x,$ec,$f;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download"',target_blank(),' id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Me=="auth"){$Wc=true;foreach((array)$_SESSION["pwds"]as$Ji=>$bh){foreach($bh
as$N=>$Ei){foreach($Ei
as$V=>$F){if($F!==null){if($Wc){echo"<p id='logins'>".script("mixin(qs('#logins'), {onmouseover: menuOver, onmouseout: menuOut});");$Wc=false;}$Pb=$_SESSION["db"][$Ji][$N][$V];foreach(($Pb?array_keys($Pb):array(""))as$l)echo"<a href='".h(auth_url($Ji,$N,$V,$l))."'>($ec[$Ji]) ".h($V.($N!=""?"@$N":"").($l!=""?" - $l":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$Me&&DB!=""){$f->select_db(DB);$T=table_status('',true);}echo
script_src(preg_replace("~\\?.*~","",ME)."?file=jush.js&version=4.6.0");if(support("sql")){echo'<script',nonce(),'>
';if($T){$re=array();foreach($T
as$R=>$U)$re[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$re).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($f)?preg_replace('~^(\\d\\.?\\d).*~s','\\1',$f->server_info):""),'\');
</script>
';}$this->databasesPrint($Me);if(DB==""||!$Me){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".'SQL pÅ™Ã­kaz'."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".'Import'."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}if($_GET["ns"]!==""&&!$Me&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'VytvoÅ™it tabulku'."</a>\n";if(!$T)echo"<p class='message'>".'Å½Ã¡dnÃ© tabulky.'."\n";else$this->tablesPrint($T);}}}function
databasesPrint($Me){global$b,$f;$k=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Nb=script("mixin(qsl('select'), {onmousedown: dbMouseDown, onchange: dbChange});");echo"<span title='".'databÃ¡ze'."'>".'DB'."</span>: ".($k?"<select name='db'>".optionlist(array(""=>"")+$k,DB)."</select>$Nb":"<input name='db' value='".h(DB)."' autocapitalize='off'>\n"),"<input type='submit' value='".'Vybrat'."'".($k?" class='hidden'":"").">\n";if($Me!="db"&&DB!=""&&$f->select_db(DB)){if(support("scheme")){echo"<br>".'SchÃ©ma'.": <select name='ns'>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>$Nb";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables'>".script("mixin(qs('#tables'), {onmouseover: menuOver, onmouseout: menuOut});");foreach($T
as$R=>$P){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".'vypsat'."</a> ";$C=$this->tableName($P);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($P)?"view":"structure"))." title='".'Zobrazit strukturu'."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$mf;function
page_header($Th,$m="",$Wa=array(),$Uh=""){global$ca,$ia,$b,$ec,$x;page_headers();if(is_ajax()&&$m){page_messages($m);exit;}$Vh=$Th.($Uh!=""?": $Uh":"");$Wh=strip_tags($Vh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="cs" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<title>',$Wh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME)."?file=default.css&version=4.6.0"),'">
',script_src(preg_replace("~\\?.*~","",ME)."?file=functions.js&version=4.6.0");if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.6.0"),'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.6.0"),'">
';foreach($b->css()as$Hb){echo'<link rel="stylesheet" type="text/css" href="',h($Hb),'">
';}}echo'
<body class="ltr nojs">
';$Uc=get_temp_dir()."/adminer.version";if(!$_COOKIE["adminer_version"]&&function_exists('openssl_verify')&&file_exists($Uc)&&filemtime($Uc)+86400>time()){$Ki=unserialize(file_get_contents($Uc));$jg="-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwqWOVuF5uw7/+Z70djoK
RlHIZFZPO0uYRezq90+7Amk+FDNd7KkL5eDve+vHRJBLAszF/7XKXe11xwliIsFs
DFWQlsABVZB3oisKCBEuI71J4kPH8dKGEWR9jDHFw3cWmoH3PmqImX6FISWbG3B8
h7FIx3jEaw5ckVPVTeo5JRm/1DZzJxjyDenXvBQ/6o9DgZKeNDgxwKzH+sw9/YCO
jHnq1cFpOIISzARlrHMa/43YfeNRAm/tsBXjSxembBPo7aQZLAWHmaj5+K19H10B
nCpz9Y++cipkVEiKRGih4ZEvjoFysEOdRLj6WiD/uUNky4xGeA6LaJqh5XpkFkcQ
fQIDAQAB
-----END PUBLIC KEY-----
";if(openssl_verify($Ki["version"],base64_decode($Ki["signature"]),$jg)==1)$_COOKIE["adminer_version"]=$Ki["version"];}echo'<script',nonce(),'>
mixin(document.body, {onkeydown: bodyKeydown, onclick: bodyClick',(isset($_COOKIE["adminer_version"])?"":", onload: partial(verifyVersion, '$ia', '".js_escape(ME)."', '".get_token()."')");?>});
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape('Jste offline.'),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden"></div>
',script("mixin(qs('#help'), {onmouseover: function () { helpOpen = 1; }, onmouseout: helpMouseout});"),'
<div id="content">
';if($Wa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$ec[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($Wa===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Wa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Wa
as$y=>$X){$Vb=(is_array($X)?$X[1]:h($X));if($Vb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Vb</a> &raquo; ";}}echo"$Th\n";}}echo"<h2>$Vh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($m);$k=&get_session("dbs");if(DB!=""&&$k&&!in_array(DB,$k,true))$k=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");header("X-Frame-Options: deny");header("X-XSS-Protection: 0");header("X-Content-Type-Options: nosniff");header("Referrer-Policy: origin-when-cross-origin");foreach($b->csp()as$Gb){$td=array();foreach($Gb
as$y=>$X)$td[]="$y $X";header("Content-Security-Policy: ".implode("; ",$td));}$b->headers();}function
csp(){return
array(array("script-src"=>"'self' 'unsafe-inline' 'nonce-".get_nonce()."' 'strict-dynamic'","connect-src"=>"'self'","frame-src"=>"https://www.adminer.org","object-src"=>"'none'","base-uri"=>"'none'","form-action"=>"'self'",),);}function
get_nonce(){static$We;if(!$We)$We=base64_encode(rand_string());return$We;}function
page_messages($m){$yi=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ie=$_SESSION["messages"][$yi];if($Ie){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ie)."</div>".script("messagesPrint();");unset($_SESSION["messages"][$yi]);}if($m)echo"<div class='error'>$m</div>\n";}function
page_footer($Me=""){global$b,$ai;echo'</div>

';if($Me!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="OdhlÃ¡sit" id="logout">
<input type="hidden" name="token" value="',$ai,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Me);echo'</div>
',script("setupSubmitHighlight(document);");}function
int32($Pe){while($Pe>=2147483648)$Pe-=4294967296;while($Pe<=-2147483649)$Pe+=4294967296;return(int)$Pe;}function
long2str($W,$Oi){$Og='';foreach($W
as$X)$Og.=pack('V',$X);if($Oi)return
substr($Og,0,end($W));return$Og;}function
str2long($Og,$Oi){$W=array_values(unpack('V*',str_pad($Og,4*ceil(strlen($Og)/4),"\0")));if($Oi)$W[]=strlen($Og);return$W;}function
xxtea_mx($bj,$aj,$yh,$Yd){return
int32((($bj>>5&0x7FFFFFF)^$aj<<2)+(($aj>>3&0x1FFFFFFF)^$bj<<4))^int32(($yh^$aj)+($Yd^$bj));}function
encrypt_string($th,$y){if($th=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($th,true);$Pe=count($W)-1;$bj=$W[$Pe];$aj=$W[0];$kg=floor(6+52/($Pe+1));$yh=0;while($kg-->0){$yh=int32($yh+0x9E3779B9);$lc=$yh>>2&3;for($Cf=0;$Cf<$Pe;$Cf++){$aj=$W[$Cf+1];$Oe=xxtea_mx($bj,$aj,$yh,$y[$Cf&3^$lc]);$bj=int32($W[$Cf]+$Oe);$W[$Cf]=$bj;}$aj=$W[0];$Oe=xxtea_mx($bj,$aj,$yh,$y[$Cf&3^$lc]);$bj=int32($W[$Pe]+$Oe);$W[$Pe]=$bj;}return
long2str($W,false);}function
decrypt_string($th,$y){if($th=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($th,false);$Pe=count($W)-1;$bj=$W[$Pe];$aj=$W[0];$kg=floor(6+52/($Pe+1));$yh=int32($kg*0x9E3779B9);while($yh){$lc=$yh>>2&3;for($Cf=$Pe;$Cf>0;$Cf--){$bj=$W[$Cf-1];$Oe=xxtea_mx($bj,$aj,$yh,$y[$Cf&3^$lc]);$aj=int32($W[$Cf]-$Oe);$W[$Cf]=$aj;}$bj=$W[$Pe];$Oe=xxtea_mx($bj,$aj,$yh,$y[$Cf&3^$lc]);$aj=int32($W[0]-$Oe);$W[0]=$aj;$yh=int32($yh-0x9E3779B9);}return
long2str($W,true);}$f='';$sd=$_SESSION["token"];if(!$sd)$_SESSION["token"]=rand(1,1e6);$ai=get_token();$Rf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$Rf[$y]=$X;}}function
add_invalid_login(){global$b;$q=file_open_lock(get_temp_dir()."/adminer.invalid");if(!$q)return;$Qd=unserialize(stream_get_contents($q));$Qh=time();if($Qd){foreach($Qd
as$Rd=>$X){if($X[0]<$Qh)unset($Qd[$Rd]);}}$Pd=&$Qd[$b->bruteForceKey()];if(!$Pd)$Pd=array($Qh+30*60,0);$Pd[1]++;file_write_unlock($q,serialize($Qd));}function
check_invalid_login(){global$b;$Qd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Pd=$Qd[$b->bruteForceKey()];$Ve=($Pd[1]>29?$Pd[0]-time():0);if($Ve>0)auth_error(lang(array('PÅ™Ã­liÅ¡ mnoho pokusÅ¯ o pÅ™ihlÃ¡Å¡enÃ­, zkuste to znovu za %d minutu.','PÅ™Ã­liÅ¡ mnoho pokusÅ¯ o pÅ™ihlÃ¡Å¡enÃ­, zkuste to znovu za %d minuty.','PÅ™Ã­liÅ¡ mnoho pokusÅ¯ o pÅ™ihlÃ¡Å¡enÃ­, zkuste to znovu za %d minut.'),ceil($Ve/60)));}$Ka=$_POST["auth"];if($Ka){session_regenerate_id();$Ji=$Ka["driver"];$N=$Ka["server"];$V=$Ka["username"];$F=(string)$Ka["password"];$l=$Ka["db"];set_password($Ji,$N,$V,$F);$_SESSION["db"][$Ji][$N][$V][$l]=true;if($Ka["permanent"]){$y=base64_encode($Ji)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($l);$dg=$b->permanentLogin(true);$Rf[$y]="$y:".base64_encode($dg?encrypt_string($F,$dg):"");cookie("adminer_permanent",implode(" ",$Rf));}if(count($_POST)==1||DRIVER!=$Ji||SERVER!=$N||$_GET["username"]!==$V||DB!=$l)redirect(auth_url($Ji,$N,$V,$l));}elseif($_POST["logout"]){if($sd&&!verify_token()){page_header('OdhlÃ¡sit','NeplatnÃ½ token CSRF. OdeÅ¡lete formulÃ¡Å™ znovu.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'OdhlÃ¡Å¡enÃ­ probÄ›hlo v poÅ™Ã¡dku.'.' '.sprintf('DÃ­ky za pouÅ¾itÃ­ Admineru, zvaÅ¾te <a href="%s">pÅ™Ã­spÄ›vek</a>.','https://sourceforge.net/donate/index.php?group_id=264133'));}}elseif($Rf&&!$_SESSION["pwds"]){session_regenerate_id();$dg=$b->permanentLogin();foreach($Rf
as$y=>$X){list(,$ib)=explode(":",$X);list($Ji,$N,$V,$l)=array_map('base64_decode',explode("-",$y));set_password($Ji,$N,$V,decrypt_string(base64_decode($ib),$dg));$_SESSION["db"][$Ji][$N][$V][$l]=true;}}function
unset_permanent(){global$Rf;foreach($Rf
as$y=>$X){list($Ji,$N,$V,$l)=array_map('base64_decode',explode("-",$y));if($Ji==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$l==DB)unset($Rf[$y]);}cookie("adminer_permanent",implode(" ",$Rf));}function
auth_error($m){global$b,$sd;$ch=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$ch]||$_GET[$ch])&&!$sd)$m='Session vyprÅ¡ela, pÅ™ihlaÅ¡te se prosÃ­m znovu.';else{add_invalid_login();$F=get_password();if($F!==null){if($F===false)$m.='<br>'.sprintf('Platnost hlavnÃ­ho hesla vyprÅ¡ela. <a href="https://www.adminer.org/cs/extension/"%s>Implementujte</a> metodu %s, aby platilo stÃ¡le.',target_blank(),'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$ch]&&$_GET[$ch]&&ini_bool("session.use_only_cookies"))$m='Session promÄ›nnÃ© musÃ­ bÃ½t povolenÃ©.';$Ef=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$Ef["lifetime"]);page_header('PÅ™ihlÃ¡sit se',$m,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('Å½Ã¡dnÃ© rozÅ¡Ã­Å™enÃ­',sprintf('NenÃ­ dostupnÃ© Å¾Ã¡dnÃ© z podporovanÃ½ch PHP rozÅ¡Ã­Å™enÃ­ (%s).',implode(", ",$Xf)),false);page_footer("auth");exit;}list($xd,$Tf)=explode(":",SERVER,2);if(is_numeric($Tf)&&$Tf<1024)auth_error('PÅ™ipojovÃ¡nÃ­ k privilegovanÃ½m portÅ¯m nenÃ­ povoleno.');check_invalid_login();$f=connect();$dc=new
Min_Driver($f);}if(!is_object($f)||($se=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($f)?h($f):(is_string($se)?$se:'NeplatnÃ© pÅ™ihlaÅ¡ovacÃ­ Ãºdaje.')));if($Ka&&$_POST["token"])$_POST["token"]=$ai;$m='';if($_POST){if(!verify_token()){$Kd="max_input_vars";$Ce=ini_get($Kd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$Ce||$X<$Ce)){$Kd=$y;$Ce=$X;}}}$m=(!$_POST["token"]&&$Ce?sprintf('Byl pÅ™ekroÄen maximÃ¡lnÃ­ povolenÃ½ poÄet polÃ­. ZvyÅ¡te prosÃ­m %s.',"'$Kd'"):'NeplatnÃ½ token CSRF. OdeÅ¡lete formulÃ¡Å™ znovu.'.' '.'Pokud jste tento poÅ¾adavek neposlali z Adminera, tak tuto strÃ¡nku zavÅ™ete.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$m=sprintf('PÅ™Ã­liÅ¡ velkÃ¡ POST data. ZmenÅ¡ete data nebo zvyÅ¡te hodnotu konfiguraÄnÃ­ direktivy %s.',"'post_max_size'");if(isset($_GET["sql"]))$m.=' '.'VelkÃ½ SQL soubor mÅ¯Å¾ete nahrÃ¡t pomocÃ­ FTP a importovat ho ze serveru.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($H,$g=null,$uf=array(),$z=0){global$x;$re=array();$w=array();$e=array();$Ta=array();$pi=array();$I=array();odd('');for($s=0;(!$z||$s<$z)&&($J=$H->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Xd=0;$Xd<count($J);$Xd++){$n=$H->fetch_field();$C=$n->name;$tf=$n->orgtable;$sf=$n->orgname;$I[$n->table]=$tf;if($uf&&$x=="sql")$re[$Xd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($tf!=""){if(!isset($w[$tf])){$w[$tf]=array();foreach(indexes($tf,$g)as$v){if($v["type"]=="PRIMARY"){$w[$tf]=array_flip($v["columns"]);break;}}$e[$tf]=$w[$tf];}if(isset($e[$tf][$sf])){unset($e[$tf][$sf]);$w[$tf][$sf]=$Xd;$re[$Xd]=$tf;}}if($n->charsetnr==63)$Ta[$Xd]=true;$pi[$Xd]=$n->type;echo"<th".($tf!=""||$n->name!=$sf?" title='".h(($tf!=""?"$tf.":"").$sf)."'":"").">".h($C).($uf?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($J
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ta[$y]&&!is_utf8($X))$X="<i>".lang(array('%d bajt','%d bajty','%d bajtÅ¯'),strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($pi[$y]==254)$X="<code>$X</code>";}if(isset($re[$y])&&!$e[$re[$y]]){if($uf&&$x=="sql"){$R=$J[array_search("table=",$re)];$_=$re[$y].urlencode($uf[$R]!=""?$uf[$R]:$R);}else{$_="edit=".urlencode($re[$y]);foreach($w[$re[$y]]as$mb=>$Xd)$_.="&where".urlencode("[".bracket_escape($mb)."]")."=".urlencode($J[$Xd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".'Å½Ã¡dnÃ© Å™Ã¡dky.')."\n";return$I;}function
referencable_primary($Xg){$I=array();foreach(table_status('',true)as$Bh=>$R){if($Bh!=$Xg&&fk_support($R)){foreach(fields($Bh)as$n){if($n["primary"]){if($I[$Bh]){unset($I[$Bh]);break;}$I[$Bh]=$n;}}}}return$I;}function
textarea($C,$Y,$K=10,$rb=80){global$x;echo"<textarea name='$C' rows='$K' cols='$rb' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$n,$pb,$dd=array(),$Lc=array()){global$uh,$pi,$wi,$hf;$U=$n["type"];echo'<td><select name="',h($y),'[type]" class="type" aria-labelledby="label-type">';if($U&&!isset($pi[$U])&&!isset($dd[$U])&&!in_array($U,$Lc))$Lc[]=$U;if($dd)$uh['CizÃ­ klÃ­Äe']=$dd;echo
optionlist(array_merge($Lc,$uh),$U),'</select>
',on_help("getTarget(event).value",1),script("mixin(qsl('select'), {onfocus: function () { lastType = selectValue(this); }, onchange: editingTypeChange});",""),'<td><input name="',h($y),'[length]" value="',h($n["length"]),'" size="3"',(!$n["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' aria-labelledby="label-length">',script("mixin(qsl('input'), {onfocus: editingLengthFocus, oninput: editingLengthChange});",""),'<td class="options">';echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.'porovnÃ¡vÃ¡nÃ­'.')'.optionlist($pb,$n["collation"]).'</select>',($wi?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($wi,$n["unsigned"]).'</select>':''),(isset($n['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".'PÅ™i zmÄ›nÄ›'.")","CURRENT_TIMESTAMP"),$n["on_update"]).'</select>':''),($dd?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".'PÅ™i smazÃ¡nÃ­'.")".optionlist(explode("|",$hf),$n["on_delete"])."</select> ":" ");}function
process_length($oe){global$wc;return(preg_match("~^\\s*\\(?\\s*$wc(?:\\s*,\\s*$wc)*+\\s*\\)?\\s*\$~",$oe)&&preg_match_all("~$wc~",$oe,$xe)?"(".implode(",",$xe[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$oe)));}function
process_type($n,$nb="COLLATE"){global$wi;return" $n[type]".process_length($n["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$n["type"])&&in_array($n["unsigned"],$wi)?" $n[unsigned]":"").(preg_match('~char|text|enum|set~',$n["type"])&&$n["collation"]?" $nb ".q($n["collation"]):"");}function
process_field($n,$ni){global$x;$Rb=$n["default"];return
array(idf_escape(trim($n["field"])),process_type($ni),($n["null"]?" NULL":" NOT NULL"),(isset($Rb)?" DEFAULT ".(preg_match('~char|binary|text|enum|set~',$n["type"])||preg_match('~^(?![a-z])~i',$Rb)?q($Rb):$Rb):""),(preg_match('~timestamp|datetime~',$n["type"])&&$n["on_update"]?" ON UPDATE $n[on_update]":""),(support("comment")&&$n["comment"]!=""?" COMMENT ".q($n["comment"]):""),($n["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($o,$pb,$U="TABLE",$dd=array(),$vb=false){global$Ld;$o=array_values($o);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?'NÃ¡zev sloupce':'NÃ¡zev parametru'),'<td id="label-type">Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;"></textarea>',script("qs('#enum-edit').onblur = editingLengthBlur;"),'<td id="label-length">DÃ©lka
<td>','Volby';if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="Auto Increment">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">VÃ½chozÃ­ hodnota
',(support("comment")?"<td id='label-comment'".($vb?"":" class='hidden'").">".'KomentÃ¡Å™':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.6.0")."' alt='+' title='".'PÅ™idat dalÅ¡Ã­'."'>".script("row_count = ".count($o).";"),'</thead>
<tbody>
',script("qsl('tbody').onkeydown = editingKeydown;");foreach($o
as$s=>$n){$s++;$vf=$n[($_POST?"orig":"field")];$Zb=(isset($_POST["add"][$s-1])||(isset($n["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$vf=="");echo'<tr',($Zb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$Ld),$n["inout"]):""),'<th>';if($Zb){echo'<input name="fields[',$s,'][field]" value="',h($n["field"]),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">',script("qsl('input').oninput = function () { editingNameChange.call(this);".($n["field"]!=""||count($o)>1?"":" editingAddRow.call(this);")." };","");}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($vf),'">
';edit_type("fields[$s]",$n,$pb,$dd);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$n["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($n["auto_increment"]){echo' checked';}echo' aria-labelledby="label-ai">',script("qsl('input').onclick = function () { var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.oninput(); } }"),'</label><td>',checkbox("fields[$s][has_default]",1,$n["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($n["default"]),'" aria-labelledby="label-default">',script("qsl('input').oninput = function () { this.previousSibling.checked = true; }",""),(support("comment")?"<td".($vb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($n["comment"])."' maxlength='".(min_version(5.5)?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.6.0")."' alt='+' title='".'PÅ™idat dalÅ¡Ã­'."'>&nbsp;".script("qsl('input').onclick = partial(editingAddRow, 1);","")."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=up.gif&version=4.6.0")."' alt='^' title='".'PÅ™esunout nahoru'."'>&nbsp;".script("qsl('input').onclick = partial(editingMoveRow, 1);","")."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=down.gif&version=4.6.0")."' alt='v' title='".'PÅ™esunout dolÅ¯'."'>&nbsp;".script("qsl('input').onclick = partial(editingMoveRow, 0);",""):""),($vf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.6.0")."' alt='x' title='".'Odebrat'."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'fields\$1[field]');"):"");}}function
process_fields(&$o){$D=0;if($_POST["up"]){$ie=0;foreach($o
as$y=>$n){if(key($_POST["up"])==$y){unset($o[$y]);array_splice($o,$ie,0,array($n));break;}if(isset($n["field"]))$ie=$D;$D++;}}elseif($_POST["down"]){$fd=false;foreach($o
as$y=>$n){if(isset($n["field"])&&$fd){unset($o[key($_POST["down"])]);array_splice($o,$D,0,array($fd));break;}if(key($_POST["down"])==$y)$fd=$n;$D++;}}elseif($_POST["add"]){$o=array_values($o);array_splice($o,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($jd,$fg,$e,$gf){if(!$fg)return
true;if($fg==array("ALL PRIVILEGES","GRANT OPTION"))return($jd=="GRANT"?queries("$jd ALL PRIVILEGES$gf WITH GRANT OPTION"):queries("$jd ALL PRIVILEGES$gf")&&queries("$jd GRANT OPTION$gf"));return
queries("$jd ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$e, ",$fg).$e).$gf);}function
drop_create($fc,$h,$gc,$Nh,$ic,$A,$He,$Fe,$Ge,$df,$Se){if($_POST["drop"])query_redirect($fc,$A,$He);elseif($df=="")query_redirect($h,$A,$Ge);elseif($df!=$Se){$Fb=queries($h);queries_redirect($A,$Fe,$Fb&&queries($fc));if($Fb)queries($gc);}else
queries_redirect($A,$Fe,queries($Nh)&&queries($ic)&&queries($fc)&&queries($h));}function
create_trigger($gf,$J){global$x;$Sh=" $J[Timing] $J[Event]".($J["Event"]=="UPDATE OF"?" ".idf_escape($J["Of"]):"");return"CREATE TRIGGER ".idf_escape($J["Trigger"]).($x=="mssql"?$gf.$Sh:$Sh.$gf).rtrim(" $J[Type]\n$J[Statement]",";").";";}function
create_routine($Kg,$J){global$Ld,$x;$O=array();$o=(array)$J["fields"];ksort($o);foreach($o
as$n){if($n["field"]!="")$O[]=(preg_match("~^($Ld)\$~",$n["inout"])?"$n[inout] ":"").idf_escape($n["field"]).process_type($n,"CHARACTER SET");}$Sb=rtrim("\n$J[definition]",";");return"CREATE $Kg ".idf_escape(trim($J["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($J["returns"],"CHARACTER SET"):"").($J["language"]?" LANGUAGE $J[language]":"").($x=="pgsql"?" AS ".q($Sb):"$Sb;");}function
remove_definer($G){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$G);}function
format_foreign_key($p){global$hf;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$p["source"])).") REFERENCES ".table($p["table"])." (".implode(", ",array_map('idf_escape',$p["target"])).")".(preg_match("~^($hf)\$~",$p["on_delete"])?" ON DELETE $p[on_delete]":"").(preg_match("~^($hf)\$~",$p["on_update"])?" ON UPDATE $p[on_update]":"");}function
tar_file($Uc,$Xh){$I=pack("a100a8a8a8a12a12",$Uc,644,0,0,decoct($Xh->size),decoct(time()));$gb=8*32;for($s=0;$s<strlen($I);$s++)$gb+=ord($I[$s]);$I.=sprintf("%06o",$gb)."\0 ";echo$I,str_repeat("\0",512-strlen($I));$Xh->send();echo
str_repeat("\0",511-($Xh->size+511)%512);}function
ini_bytes($Kd){$X=ini_get($Kd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Pf){global$x,$f;$Ki=preg_replace('~^(\\d\\.?\\d).*~s','\\1',$f->server_info);$Ai=array('sql'=>"https://dev.mysql.com/doc/refman/$Ki/en/",'sqlite'=>"https://www.sqlite.org/",'pgsql'=>"https://www.postgresql.org/docs/$Ki/static/",'mssql'=>"https://msdn.microsoft.com/library/",'oracle'=>"https://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($Pf[$x]?"<a href='$Ai[$x]$Pf[$x]'".target_blank()."><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($l){global$f;if(!$f->select_db($l))return"?";$I=0;foreach(table_status()as$S)$I+=$S["Data_length"]+$S["Index_length"];return
format_number($I);}function
set_utf8mb4($h){global$f;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$h)){$O=true;echo"SET NAMES ".charset($f).";\n\n";}}function
connect_error(){global$b,$f,$ai,$m,$ec;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('DatabÃ¡ze'.": ".h(DB),'NesprÃ¡vnÃ¡ databÃ¡ze.',true);}else{if($_POST["db"]&&!$m)queries_redirect(substr(ME,0,-1),'DatabÃ¡ze byly odstranÄ›ny.',drop_databases($_POST["db"]));page_header('Vybrat databÃ¡zi',$m,false);echo"<p class='links'>\n";foreach(array('database'=>'VytvoÅ™it databÃ¡zi','privileges'=>'OprÃ¡vnÄ›nÃ­','processlist'=>'Seznam procesÅ¯','variables'=>'PromÄ›nnÃ©','status'=>'Stav',)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".sprintf('Verze %s: %s pÅ™es PHP rozÅ¡Ã­Å™enÃ­ %s',$ec[DRIVER],"<b>".h($f->server_info)."</b>","<b>$f->extension</b>")."\n","<p>".sprintf('PÅ™ihlÃ¡Å¡en jako: %s',"<b>".h(logged_user())."</b>")."\n";$k=$b->databases();if($k){$Rg=support("scheme");$pb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),"<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".'DatabÃ¡ze'." - <a href='".h(ME)."refresh=1'>".'Obnovit'."</a>"."<td>".'PorovnÃ¡vÃ¡nÃ­'."<td>".'Tabulky'."<td>".'Velikost'." - <a href='".h(ME)."dbsize=1'>".'SpoÄÃ­tat'."</a>".script("qsl('a').onclick = partial(ajaxSetHtml, '".js_escape(ME)."script=connect');","")."</thead>\n";$k=($_GET["dbsize"]?count_tables($k):array_flip($k));foreach($k
as$l=>$T){$Jg=h(ME)."db=".urlencode($l);$t=h("Db-".$l);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$l,in_array($l,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$Jg' id='$l'>".h($l)."</a>";$ob=nbsp(db_collation($l,$pb));echo"<td>".(support("database")?"<a href='$Jg".($Rg?"&amp;ns=":"")."&amp;database=' title='".'PozmÄ›nit databÃ¡zi'."'>$ob</a>":$ob),"<td align='right'><a href='$Jg&amp;schema=' id='tables-".h($l)."' title='".'SchÃ©ma databÃ¡ze'."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($l)."'>".($_GET["dbsize"]?db_size($l):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".'OznaÄenÃ©'." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value=''>".script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^db/)); };")."<input type='submit' name='drop' value='".'Odstranit'."'>".confirm()."\n"."</div></fieldset>\n":""),script("tableCheck();"),"<input type='hidden' name='token' value='$ai'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$f->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('SchÃ©ma'.": ".h($_GET["ns"]),'NesprÃ¡vnÃ© schÃ©ma.',true);page_footer("ns");exit;}}$hf="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($_b){$this->size+=strlen($_b);fwrite($this->handler,$_b);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$wc="'(?:''|[^'\\\\]|\\\\.)*'";$Ld="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$o=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$L=array(idf_escape($_GET["field"]));$H=$dc->select($a,$L,array(where($_GET,$o)),$L);$J=($H?$H->fetch_row():array());echo$J[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$o=fields($a);if(!$o)$m=error();$S=table_status1($a,true);page_header(($o&&is_view($S)?$S['Engine']=='materialized view'?'MaterializovanÃ½ pohled':'Pohled':'Tabulka').": ".h($a),$m);$b->selectLinks($S);$ub=$S["Comment"];if($ub!="")echo"<p class='nowrap'>".'KomentÃ¡Å™'.": ".h($ub)."\n";if($o)$b->tableStructurePrint($o);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".'Indexy'."</h3>\n";$w=indexes($a);if($w)$b->tableIndexesPrint($w);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.'PozmÄ›nit indexy'."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".'CizÃ­ klÃ­Äe'."</h3>\n";$dd=foreign_keys($a);if($dd){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Zdroj'."<td>".'CÃ­l'."<td>".'PÅ™i smazÃ¡nÃ­'."<td>".'PÅ™i zmÄ›nÄ›'."<td>&nbsp;</thead>\n";foreach($dd
as$C=>$p){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$p["source"]))."</i>","<td><a href='".h($p["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($p["db"]),ME):($p["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($p["ns"]),ME):ME))."table=".urlencode($p["table"])."'>".($p["db"]!=""?"<b>".h($p["db"])."</b>.":"").($p["ns"]!=""?"<b>".h($p["ns"])."</b>.":"").h($p["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$p["target"]))."</i>)","<td>".nbsp($p["on_delete"])."\n","<td>".nbsp($p["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.'ZmÄ›nit'.'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.'PÅ™idat cizÃ­ klÃ­Ä'."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".'Triggery'."</h3>\n";$mi=triggers($a);if($mi){echo"<table cellspacing='0'>\n";foreach($mi
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".'ZmÄ›nit'."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.'PÅ™idat trigger'."</a>\n";}}elseif(isset($_GET["schema"])){page_header('SchÃ©ma databÃ¡ze',"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Dh=array();$Eh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$xe,PREG_SET_ORDER);foreach($xe
as$s=>$B){$Dh[$B[1]]=array($B[2],$B[3]);$Eh[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$bi=0;$Qa=-1;$Qg=array();$wg=array();$me=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Uf=0;$Qg[$R]["fields"]=array();foreach(fields($R)as$C=>$n){$Uf+=1.25;$n["pos"]=$Uf;$Qg[$R]["fields"][$C]=$n;}$Qg[$R]["pos"]=($Dh[$R]?$Dh[$R]:array($bi,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$ke=$Qa;if($Dh[$R][1]||$Dh[$X["table"]][1])$ke=min(floatval($Dh[$R][1]),floatval($Dh[$X["table"]][1]))-1;else$Qa-=.1;while($me[(string)$ke])$ke-=.0001;$Qg[$R]["references"][$X["table"]][(string)$ke]=array($X["source"],$X["target"]);$wg[$X["table"]][$R][(string)$ke]=$X["target"];$me[(string)$ke]=true;}}$bi=max($bi,$Qg[$R]["pos"][0]+2.5+$Uf);}echo'<div id="schema" style="height: ',$bi,'em;">
<script',nonce(),'>
qs(\'#schema\').onselectstart = function () { return false; };
var tablePos = {',implode(",",$Eh)."\n",'};
var em = qs(\'#schema\').offsetHeight / ',$bi,';
document.onmousemove = schemaMousemove;
document.onmouseup = partialArg(schemaMouseup, \'',js_escape(DB),'\');
</script>
';foreach($Qg
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>",script("qsl('div').onmousedown = schemaMousedown;");foreach($R["fields"]as$n){$X='<span'.type_class($n["type"]).' title="'.h($n["full_type"].($n["null"]?" NULL":'')).'">'.h($n["field"]).'</span>';echo"<br>".($n["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$Kh=>$xg){foreach($xg
as$ke=>$tg){$le=$ke-$Dh[$C][1];$s=0;foreach($tg[0]as$jh)echo"\n<div class='references' title='".h($Kh)."' id='refs$ke-".($s++)."' style='left: $le"."em; top: ".$R["fields"][$jh]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$le)."em;'></div></div>";}}foreach((array)$wg[$C]as$Kh=>$xg){foreach($xg
as$ke=>$e){$le=$ke-$Dh[$C][1];$s=0;foreach($e
as$Jh)echo"\n<div class='references' title='".h($Kh)."' id='refd$ke-".($s++)."' style='left: $le"."em; top: ".$R["fields"][$Jh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME)."?file=arrow.gif) no-repeat right center;&version=4.6.0")."'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$le)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Qg
as$C=>$R){foreach((array)$R["references"]as$Kh=>$xg){foreach($xg
as$ke=>$tg){$Le=$bi;$Ae=-10;foreach($tg[0]as$y=>$jh){$Vf=$R["pos"][0]+$R["fields"][$jh]["pos"];$Wf=$Qg[$Kh]["pos"][0]+$Qg[$Kh]["fields"][$tg[1][$y]]["pos"];$Le=min($Le,$Vf,$Wf);$Ae=max($Ae,$Vf,$Wf);}echo"<div class='references' id='refl$ke' style='left: $ke"."em; top: $Le"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Ae-$Le)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">TrvalÃ½ odkaz</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$m){$Cb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$Cb.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($Cb,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Ic=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Td=preg_match('~sql~',$_POST["format"]);if($Td){echo"-- Adminer $ia ".$ec[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$f->query("SET time_zone = '+00:00';");}}$vh=$_POST["db_style"];$k=array(DB);if(DB==""){$k=$_POST["databases"];if(is_string($k))$k=explode("\n",rtrim(str_replace("\r","",$k),"\n"));}foreach((array)$k
as$l){$b->dumpDatabase($l);if($f->select_db($l)){if($Td&&preg_match('~CREATE~',$vh)&&($h=$f->result("SHOW CREATE DATABASE ".idf_escape($l),1))){set_utf8mb4($h);if($vh=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($l).";\n";echo"$h;\n";}if($Td){if($vh)echo
use_sql($l).";\n\n";$Af="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Kg){foreach(get_rows("SHOW $Kg STATUS WHERE Db = ".q($l),null,"-- ")as$J){$h=remove_definer($f->result("SHOW CREATE $Kg ".idf_escape($J["Name"]),2));set_utf8mb4($h);$Af.=($vh!='DROP+CREATE'?"DROP $Kg IF EXISTS ".idf_escape($J["Name"]).";;\n":"")."$h;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$J){$h=remove_definer($f->result("SHOW CREATE EVENT ".idf_escape($J["Name"]),3));set_utf8mb4($h);$Af.=($vh!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($J["Name"]).";;\n":"")."$h;;\n\n";}}if($Af)echo"DELIMITER ;;\n\n$Af"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Mi=array();foreach(table_status('',true)as$C=>$S){$R=(DB==""||in_array($C,(array)$_POST["tables"]));$Kb=(DB==""||in_array($C,(array)$_POST["data"]));if($R||$Kb){if($Ic=="tar"){$Xh=new
TmpFile;ob_start(array($Xh,'write'),1e5);}$b->dumpTable($C,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$Mi[]=$C;elseif($Kb){$o=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($o,$o)." FROM ".table($C));}if($Td&&$_POST["triggers"]&&$R&&($mi=trigger_sql($C)))echo"\nDELIMITER ;;\n$mi\nDELIMITER ;\n";if($Ic=="tar"){ob_end_flush();tar_file((DB!=""?"":"$l/")."$C.csv",$Xh);}elseif($Td)echo"\n";}}foreach($Mi
as$Li)$b->dumpTable($Li,$_POST["table_style"],1);if($Ic=="tar")echo
pack("x512");}}}if($Td)echo"-- ".$f->result("SELECT NOW()")."\n";exit;}page_header('Export',$m,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Ob=array('','USE','DROP+CREATE','CREATE');$Fh=array('','DROP+CREATE','CREATE');$Lb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Lb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$J);if(!$J)$J=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($J["events"])){$J["routines"]=$J["events"]=($_GET["dump"]=="");$J["triggers"]=$J["table_style"];}echo"<tr><th>".'VÃ½stup'."<td>".html_select("output",$b->dumpOutput(),$J["output"],0)."\n";echo"<tr><th>".'FormÃ¡t'."<td>".html_select("format",$b->dumpFormat(),$J["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".'DatabÃ¡ze'."<td>".html_select('db_style',$Ob,$J["db_style"]).(support("routine")?checkbox("routines",1,$J["routines"],'Procedury a funkce'):"").(support("event")?checkbox("events",1,$J["events"],'UdÃ¡losti'):"")),"<tr><th>".'Tabulky'."<td>".html_select('table_style',$Fh,$J["table_style"]).checkbox("auto_increment",1,$J["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$J["triggers"],'Triggery'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Lb,$J["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$ai,'">

<table cellspacing="0">
';$Zf=array();if(DB!=""){$eb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$eb>".'Tabulky'."</label>".script("qs('#check-tables').onclick = partial(formCheck, /^tables\\[/);",""),"<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$eb></label>".script("qs('#check-data').onclick = partial(formCheck, /^data\\[/);",""),"</thead>\n";$Mi="";$Gh=tables_list();foreach($Gh
as$C=>$U){$Yf=preg_replace('~_.*~','',$C);$eb=($a==""||$a==(substr($a,-1)=="%"?"$Yf%":$C));$cg="<tr><td>".checkbox("tables[]",$C,$eb,$C,"checkboxClick.call(this, event); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Mi.="$cg\n";else
echo"$cg<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$eb,"","checkboxClick.call(this, event); formUncheck('check-data');")."</label>\n";$Zf[$Yf]++;}echo$Mi;if($Gh)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}else{echo"<thead><tr><th style='text-align: left;'>","<label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"").">".'DatabÃ¡ze'."</label>",script("qs('#check-databases').onclick = partial(formCheck, /^databases\\[/);",""),"</thead>\n";$k=$b->databases();if($k){foreach($k
as$l){if(!information_schema($l)){$Yf=preg_replace('~_.*~','',$l);echo"<tr><td>".checkbox("databases[]",$l,$a==""||$a=="$Yf%",$l,"formUncheck('check-databases');","block")."\n";$Zf[$Yf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Wc=true;foreach($Zf
as$y=>$X){if($y!=""&&$X>1){echo($Wc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Wc=false;}}}elseif(isset($_GET["privileges"])){page_header('OprÃ¡vnÄ›nÃ­');echo'<p class="links"><a href="'.h(ME).'user=">'.'VytvoÅ™it uÅ¾ivatele'."</a>";$H=$f->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$jd=$H;if(!$H)$H=$f->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($jd?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'UÅ¾ivatel'."<th>".'Server'."<th>&nbsp;</thead>\n";while($J=$H->fetch_assoc())echo'<tr'.odd().'><td>'.h($J["User"])."<td>".h($J["Host"]).'<td><a href="'.h(ME.'user='.urlencode($J["User"]).'&host='.urlencode($J["Host"])).'">'.'Upravit'."</a>\n";if(!$jd||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Upravit'."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$m&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$vd=&get_session("queries");$ud=&$vd[DB];if(!$m&&$_POST["clear"]){$ud=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?'Import':'SQL pÅ™Ã­kaz'),$m);if(!$m&&$_POST){$q=false;if(!isset($_GET["import"]))$G=$_POST["query"];elseif($_POST["webfile"]){$nh=$b->importServerPath();$q=@fopen((file_exists($nh)?$nh:"compress.zlib://$nh.gz"),"rb");$G=($q?fread($q,1e6):false);}else$G=get_file("sql_file",true);if(is_string($G)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($G)+memory_get_usage()+8e6));if($G!=""&&strlen($G)<1e6){$kg=$G.(preg_match("~;[ \t\r\n]*\$~",$G)?"":";");if(!$ud||reset(end($ud))!=$kg){restart_session();$ud[]=array($kg,time());set_session("queries",$vd);stop_session();}}$kh="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Ub=";";$D=0;$tc=true;$g=connect();if(is_object($g)&&DB!="")$g->select_db(DB);$tb=0;$yc=array();$Gf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$ci=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$kc=$b->dumpFormat();unset($kc["sql"]);while($G!=""){if(!$D&&preg_match("~^$kh*+DELIMITER\\s+(\\S+)~i",$G,$B)){$Ub=$B[1];$G=substr($G,strlen($B[0]));}else{preg_match('('.preg_quote($Ub)."\\s*|$Gf)",$G,$B,PREG_OFFSET_CAPTURE,$D);list($fd,$Uf)=$B[0];if(!$fd&&$q&&!feof($q))$G.=fread($q,1e5);else{if(!$fd&&rtrim($G)=="")break;$D=$Uf+strlen($fd);if($fd&&rtrim($fd)!=$Ub){while(preg_match('('.($fd=='/*'?'\\*/':($fd=='['?']':(preg_match('~^-- |^#~',$fd)?"\n":preg_quote($fd)."|\\\\."))).'|$)s',$G,$B,PREG_OFFSET_CAPTURE,$D)){$Og=$B[0][0];if(!$Og&&$q&&!feof($q))$G.=fread($q,1e5);else{$D=$B[0][1]+strlen($Og);if($Og[0]!="\\")break;}}}else{$tc=false;$kg=substr($G,0,$Uf);$tb++;$cg="<pre id='sql-$tb'><code class='jush-$x'>".$b->sqlCommandQuery($kg)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$kh*+ATTACH\\b~i",$kg,$B)){echo$cg,"<p class='error'>".'Dotazy ATTACH nejsou podporovanÃ©.'."\n";$yc[]=" <a href='#sql-$tb'>$tb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$cg;ob_flush();flush();}$qh=microtime(true);if($f->multi_query($kg)&&is_object($g)&&preg_match("~^$kh*+USE\\b~i",$kg))$g->query($kg);do{$H=$f->store_result();if($f->error){echo($_POST["only_errors"]?$cg:""),"<p class='error'>".'Chyba v dotazu'.($f->errno?" ($f->errno)":"").": ".error()."\n";$yc[]=" <a href='#sql-$tb'>$tb</a>";if($_POST["error_stops"])break
2;}else{$Qh=" <span class='time'>(".format_time($qh).")</span>".(strlen($kg)<1000?" <a href='".h(ME)."sql=".urlencode(trim($kg))."'>".'Upravit'."</a>":"");$za=$f->affected_rows;$Pi=($_POST["only_errors"]?"":$dc->warnings());$Qi="warnings-$tb";if($Pi)$Qh.=", <a href='#$Qi'>".'VarovÃ¡nÃ­'."</a>".script("qsl('a').onclick = partial(toggle, '$Qi');","");$Fc=null;$Gc="explain-$tb";if(is_object($H)){$z=$_POST["limit"];$uf=select($H,$g,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Xe=$H->num_rows;echo"<p>".($Xe?($z&&$Xe>$z?sprintf('%d / ',$z):"").lang(array('%d Å™Ã¡dek','%d Å™Ã¡dky','%d Å™Ã¡dkÅ¯'),$Xe):""),$Qh;if($g&&preg_match("~^($kh|\\()*+SELECT\\b~i",$kg)&&($Fc=explain($g,$kg)))echo", <a href='#$Gc'>Explain</a>".script("qsl('a').onclick = partial(toggle, '$Gc');","");$t="export-$tb";echo", <a href='#$t'>".'Export'."</a>".script("qsl('a').onclick = partial(toggle, '$t');","")."<span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$kc,$xa["format"])."<input type='hidden' name='query' value='".h($kg)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$ai'></span>\n"."</form>\n";}}else{if(preg_match("~^$kh*+(CREATE|DROP|ALTER)$kh++(DATABASE|SCHEMA)\\b~i",$kg)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($f->info)."'>".lang(array('PÅ™Ã­kaz probÄ›hl v poÅ™Ã¡dku, byl zmÄ›nÄ›n %d zÃ¡znam.','PÅ™Ã­kaz probÄ›hl v poÅ™Ã¡dku, byly zmÄ›nÄ›ny %d zÃ¡znamy.','PÅ™Ã­kaz probÄ›hl v poÅ™Ã¡dku, bylo zmÄ›nÄ›no %d zÃ¡znamÅ¯.'),$za)."$Qh\n";}echo($Pi?"<div id='$Qi' class='hidden'>\n$Pi</div>\n":"");if($Fc){echo"<div id='$Gc' class='hidden'>\n";select($Fc,$g,$uf);echo"</div>\n";}}$qh=microtime(true);}while($f->next_result());}$G=substr($G,$D);$D=0;}}}}if($tc)echo"<p class='message'>".'Å½Ã¡dnÃ© pÅ™Ã­kazy k vykonÃ¡nÃ­.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d pÅ™Ã­kaz probÄ›hl v poÅ™Ã¡dku.','%d pÅ™Ã­kazy probÄ›hly v poÅ™Ã¡dku.','%d pÅ™Ã­kazÅ¯ probÄ›hlo v poÅ™Ã¡dku.'),$tb-count($yc))," <span class='time'>(".format_time($ci).")</span>\n";}elseif($yc&&$tb>1)echo"<p class='error'>".'Chyba v dotazu'.": ".implode("",$yc)."\n";}else
echo"<p class='error'>".upload_error($G)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$Cc="<input type='submit' value='".'ProvÃ©st'."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$kg=$_GET["sql"];if($_POST)$kg=$_POST["query"];elseif($_GET["history"]=="all")$kg=$ud;elseif($_GET["history"]!="")$kg=$ud[$_GET["history"]][0];echo"<p>";textarea("query",$kg,20);echo($_POST?"":script("qs('textarea').focus();")),"<p>$Cc\n",'Limit Å™Ã¡dek'.": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".'NahrÃ¡nÃ­ souboru'."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$Cc":'NahrÃ¡vÃ¡nÃ­ souborÅ¯ nenÃ­ povoleno.'),"</div></fieldset>\n","<fieldset><legend>".'Ze serveru'."</legend><div>",sprintf('Soubor %s na webovÃ©m serveru',"<code>".h($b->importServerPath()).(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Spustit soubor'.'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),'Zastavit pÅ™i chybÄ›')."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),'Zobrazit pouze chyby')."\n","<input type='hidden' name='token' value='$ai'>\n";if(!isset($_GET["import"])&&$ud){print_fieldset("history",'Historie',$_GET["history"]!="");for($X=end($ud);$X;$X=prev($ud)){$y=key($ud);list($kg,$Qh,$oc)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.'Upravit'."</a>"." <span class='time' title='".@date('Y-m-d',$Qh)."'>".@date("H:i:s",$Qh)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$kg)))),80,"</code>").($oc?" <span class='time'>($oc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".'VyÄistit'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Upravit vÅ¡e'."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$o=fields($a);$Z=(isset($_GET["select"])?($_POST["check"]&&count($_POST["check"])==1?where_check($_POST["check"][0],$o):""):where($_GET,$o));$xi=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($o
as$C=>$n){if(!isset($n["privileges"][$xi?"update":"insert"])||$b->fieldName($n)=="")unset($o[$C]);}if($_POST&&!$m&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($xi?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$w=indexes($a);$si=unique_array($_GET["where"],$w);$ng="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,'PoloÅ¾ka byla smazÃ¡na.',$dc->delete($a,$ng,!$si));else{$O=array();foreach($o
as$C=>$n){$X=process_input($n);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($xi){if(!$O)redirect($A);queries_redirect($A,'PoloÅ¾ka byla aktualizovÃ¡na.',$dc->update($a,$O,$ng,!$si));if(is_ajax()){page_headers();page_messages($m);exit;}}else{$H=$dc->insert($a,$O);$je=($H?last_id():0);queries_redirect($A,sprintf('PoloÅ¾ka%s byla vloÅ¾ena.',($je?" $je":"")),$H);}}}$J=null;if($_POST["save"])$J=(array)$_POST["fields"];elseif($Z){$L=array();foreach($o
as$C=>$n){if(isset($n["privileges"]["select"])){$Ga=convert_field($n);if($_POST["clone"]&&$n["auto_increment"])$Ga="''";if($x=="sql"&&preg_match("~enum|set~",$n["type"]))$Ga="1*".idf_escape($C);$L[]=($Ga?"$Ga AS ":"").idf_escape($C);}}$J=array();if(!support("table"))$L=array("*");if($L){$H=$dc->select($a,$L,array($Z),$L,array(),(isset($_GET["select"])?2:1));if(!$H)$m=error();else{$J=$H->fetch_assoc();if(!$J)$J=false;}if(isset($_GET["select"])&&(!$J||$H->fetch_assoc()))$J=null;}}if(!support("table")&&!$o){if(!$Z){$H=$dc->select($a,array("*"),$Z,array("*"));$J=($H?$H->fetch_assoc():false);if(!$J)$J=array($dc->primary=>"");}if($J){foreach($J
as$y=>$X){if(!$Z)$J[$y]=null;$o[$y]=array("field"=>$y,"null"=>($y!=$dc->primary),"auto_increment"=>($y==$dc->primary));}}}edit_form($a,$o,$J,$xi);}elseif(isset($_GET["create"])){$a=$_GET["create"];$If=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$If[$y]=$y;$vg=referencable_primary($a);$dd=array();foreach($vg
as$Bh=>$n)$dd[str_replace("`","``",$Bh)."`".str_replace("`","``",$n["field"])]=$Bh;$xf=array();$S=array();if($a!=""){$xf=fields($a);$S=table_status($a);if(!$S)$m='Å½Ã¡dnÃ© tabulky.';}$J=$_POST;$J["fields"]=(array)$J["fields"];if($J["auto_increment_col"])$J["fields"][$J["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($J["fields"])&&!$m){if($_POST["drop"])queries_redirect(substr(ME,0,-1),'Tabulka byla odstranÄ›na.',drop_tables(array($a)));else{$o=array();$Da=array();$Bi=false;$bd=array();$wf=reset($xf);$Aa=" FIRST";foreach($J["fields"]as$y=>$n){$p=$dd[$n["type"]];$ni=($p!==null?$vg[$p]:$n);if($n["field"]!=""){if(!$n["has_default"])$n["default"]=null;if($y==$J["auto_increment_col"])$n["auto_increment"]=true;$hg=process_field($n,$ni);$Da[]=array($n["orig"],$hg,$Aa);if($hg!=process_field($wf,$wf)){$o[]=array($n["orig"],$hg,$Aa);if($n["orig"]!=""||$Aa)$Bi=true;}if($p!==null)$bd[idf_escape($n["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$dd[$n["type"]],'source'=>array($n["field"]),'target'=>array($ni["field"]),'on_delete'=>$n["on_delete"],));$Aa=" AFTER ".idf_escape($n["field"]);}elseif($n["orig"]!=""){$Bi=true;$o[]=array($n["orig"]);}if($n["orig"]!=""){$wf=next($xf);if(!$wf)$Aa="";}}$Kf="";if($If[$J["partition_by"]]){$Lf=array();if($J["partition_by"]=='RANGE'||$J["partition_by"]=='LIST'){foreach(array_filter($J["partition_names"])as$y=>$X){$Y=$J["partition_values"][$y];$Lf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($J["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Kf.="\nPARTITION BY $J[partition_by]($J[partition])".($Lf?" (".implode(",",$Lf)."\n)":($J["partitions"]?" PARTITIONS ".(+$J["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$Kf.="\nREMOVE PARTITIONING";$Ee='Tabulka byla zmÄ›nÄ›na.';if($a==""){cookie("adminer_engine",$J["Engine"]);$Ee='Tabulka byla vytvoÅ™ena.';}$C=trim($J["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$Ee,alter_table($a,$C,($x=="sqlite"&&($Bi||$bd)?$Da:$o),$bd,($J["Comment"]!=$S["Comment"]?$J["Comment"]:null),($J["Engine"]&&$J["Engine"]!=$S["Engine"]?$J["Engine"]:""),($J["Collation"]&&$J["Collation"]!=$S["Collation"]?$J["Collation"]:""),($J["Auto_increment"]!=""?number($J["Auto_increment"]):""),$Kf));}}page_header(($a!=""?'PozmÄ›nit tabulku':'VytvoÅ™it tabulku'),$m,array("table"=>$a),h($a));if(!$_POST){$J=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($pi["int"])?"int":(isset($pi["integer"])?"integer":"")),"on_update"=>"")),"partition_names"=>array(""),);if($a!=""){$J=$S;$J["name"]=$a;$J["fields"]=array();if(!$_GET["auto_increment"])$J["Auto_increment"]="";foreach($xf
as$n){$n["has_default"]=isset($n["default"]);$J["fields"][]=$n;}if(support("partitioning")){$hd="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$H=$f->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $hd ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($J["partition_by"],$J["partitions"],$J["partition"])=$H->fetch_row();$Lf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $hd AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$Lf[""]="";$J["partition_names"]=array_keys($Lf);$J["partition_values"]=array_values($Lf);}}}$pb=collations();$vc=engines();foreach($vc
as$uc){if(!strcasecmp($uc,$J["Engine"])){$J["Engine"]=$uc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo'NÃ¡zev tabulky: <input name="name" maxlength="64" value="',h($J["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST)echo
script("focus(qs('#form')['name']);");echo($vc?"<select name='Engine'>".optionlist(array(""=>"(".'ÃºloÅ¾iÅ¡tÄ›'.")")+$vc,$J["Engine"])."</select>".on_help("getTarget(event).value",1).script("qsl('select').onchange = helpClose;"):""),' ',($pb&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".'porovnÃ¡vÃ¡nÃ­'.")")+$pb,$J["Collation"]):""),' <input type="submit" value="UloÅ¾it">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$vb=($_POST?$_POST["comments"]:$J["Comment"]!="");if(!$_POST&&!$vb){foreach($J["fields"]as$n){if($n["comment"]!=""){$vb=true;break;}}}edit_fields($J["fields"],$pb,"TABLE",$dd,$vb);echo'</table>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($J["Auto_increment"]),'">
',checkbox("defaults",1,true,'VÃ½chozÃ­ hodnoty',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"])echo
script("editingHideDefaults();");echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly'".($vb?" checked":"").">".'KomentÃ¡Å™'."</label>".script("qsl('input').onclick = function () { columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus(); };").' <input name="Comment" id="Comment" value="'.h($J["Comment"]).'" maxlength="'.(min_version(5.5)?2048:60).'"'.($vb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="UloÅ¾it">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="Odstranit">',confirm(sprintf('Odstranit %s?',$a));}if(support("partitioning")){$Jf=preg_match('~RANGE|LIST~',$J["partition_by"]);print_fieldset("partition",'RozdÄ›lit podle',$J["partition_by"]);echo'<p>
',"<select name='partition_by'>".optionlist(array(""=>"")+$If,$J["partition_by"])."</select>".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).script("qsl('select').onchange = partitionByChange;"),'(<input name="partition" value="',h($J["partition"]),'">)
OddÃ­ly: <input type="number" name="partitions" class="size',($Jf||!$J["partition_by"]?" hidden":""),'" value="',h($J["partitions"]),'">
<table cellspacing="0" id="partition-table"',($Jf?"":" class='hidden'"),'>
<thead><tr><th>NÃ¡zev oddÃ­lu<th>Hodnoty</thead>
';foreach($J["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'" autocapitalize="off">',($y==count($J["partition_names"])-1?script("qsl('input').oninput = partitionNameChange;"):''),'<td><input name="partition_values[]" value="'.h($J["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$Dd=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.(min_version(5.6,'10.0.5')?'|InnoDB':'').'~i',$S["Engine"]))$Dd[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.(min_version(5.7,'10.2.2')?'|InnoDB':'').'~i',$S["Engine"]))$Dd[]="SPATIAL";$w=indexes($a);$ag=array();if($x=="mongo"){$ag=$w["_id_"];unset($Dd[0]);unset($w["_id_"]);}$J=$_POST;if($_POST&&!$m&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($J["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$Dd)){$e=array();$pe=array();$Wb=array();$O=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$d){if($d!=""){$oe=$v["lengths"][$y];$Vb=$v["descs"][$y];$O[]=idf_escape($d).($oe?"(".(+$oe).")":"").($Vb?" DESC":"");$e[]=$d;$pe[]=($oe?$oe:null);$Wb[]=$Vb;}}if($e){$Dc=$w[$C];if($Dc){ksort($Dc["columns"]);ksort($Dc["lengths"]);ksort($Dc["descs"]);if($v["type"]==$Dc["type"]&&array_values($Dc["columns"])===$e&&(!$Dc["lengths"]||array_values($Dc["lengths"])===$pe)&&array_values($Dc["descs"])===$Wb){unset($w[$C]);continue;}}$c[]=array($v["type"],$C,$O);}}}foreach($w
as$C=>$Dc)$c[]=array($Dc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexy byly zmÄ›nÄ›ny.',alter_indexes($a,$c));}page_header('Indexy',$m,array("table"=>$a),h($a));$o=array_keys(fields($a));if($_POST["add"]){foreach($J["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$J["indexes"][$y]["columns"][]="";}$v=end($J["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$J["indexes"][]=array("columns"=>array(1=>""));}if(!$J){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$J["indexes"]=$w;}?>

<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">Typ indexu
<th><input type="submit" class="wayoff">Sloupec (dÃ©lka)
<th id="label-name">NÃ¡zev
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME) . "?file=plus.gif&version=4.6.0") . "' alt='+' title='PÅ™idat dalÅ¡Ã­'></noscript>&nbsp;
</thead>
<?php
if($ag){echo"<tr><td>PRIMARY<td>";foreach($ag["columns"]as$y=>$d){echo
select_input(" disabled",$o,$d),"<label><input disabled type='checkbox'>".'sestupnÄ›'."</label> ";}echo"<td><td>\n";}$Xd=1;foreach($J["indexes"]as$v){if(!$_POST["drop_col"]||$Xd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Xd][type]",array(-1=>"")+$Dd,$v["type"],($Xd==count($J["indexes"])?"indexesAddRow.call(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$d){echo"<span>".select_input(" name='indexes[$Xd][columns][$s]' title='".'Sloupec'."'",($o?array_combine($o,$o):$o),$d,"partial(".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn").", '".js_escape($x=="sql"?"":$_GET["indexes"]."_")."')"),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Xd][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".'DÃ©lka'."'>":""),($x!="sql"?checkbox("indexes[$Xd][descs][$s]",1,$v["descs"][$y],'sestupnÄ›'):"")," </span>";$s++;}echo"<td><input name='indexes[$Xd][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Xd]' src='".h(preg_replace("~\\?.*~","",ME)."?file=cross.gif&version=4.6.0")."' alt='x' title='".'Odebrat'."'>".script("qsl('input').onclick = partial(editingRemoveRow, 'indexes\$1[type]');");}$Xd++;}echo'</table>
<p>
<input type="submit" value="UloÅ¾it">
<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["database"])){$J=$_POST;if($_POST&&!$m&&!isset($_POST["add_x"])){$C=trim($J["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'DatabÃ¡ze byla odstranÄ›na.',drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),'DatabÃ¡ze byla pÅ™ejmenovÃ¡na.',rename_database($C,$J["collation"]));}else{$k=explode("\n",str_replace("\r","",$C));$wh=true;$ie="";foreach($k
as$l){if(count($k)==1||$l!=""){if(!create_database($l,$J["collation"]))$wh=false;$ie=$l;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($ie),'DatabÃ¡ze byla vytvoÅ™ena.',$wh);}}else{if(!$J["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$J["collation"])?" COLLATE $J[collation]":""),substr(ME,0,-1),'DatabÃ¡ze byla zmÄ›nÄ›na.');}}page_header(DB!=""?'PozmÄ›nit databÃ¡zi':'VytvoÅ™it databÃ¡zi',$m,array(),h(DB));$pb=collations();$C=DB;if($_POST)$C=$J["name"];elseif(DB!="")$J["collation"]=db_collation(DB,$pb);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$jd){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$jd,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($pb?html_select("collation",array(""=>"(".'porovnÃ¡vÃ¡nÃ­'.")")+$pb,$J["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):""),script("focus(qs('#name'));"),'<input type="submit" value="UloÅ¾it">
';if(DB!="")echo"<input type='submit' name='drop' value='".'Odstranit'."'>".confirm(sprintf('Odstranit %s?',DB))."\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME)."?file=plus.gif&version=4.6.0")."' alt='+' title='".'PÅ™idat dalÅ¡Ã­'."'>\n";echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["scheme"])){$J=$_POST;if($_POST&&!$m){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,'SchÃ©ma bylo odstranÄ›no.');else{$C=trim($J["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,'SchÃ©ma bylo vytvoÅ™eno.');elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,'SchÃ©ma bylo zmÄ›nÄ›no.');else
redirect($_);}}page_header($_GET["ns"]!=""?'PozmÄ›nit schÃ©ma':'VytvoÅ™it schÃ©ma',$m);if(!$J)$J["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($J["name"]),'" autocapitalize="off">
',script("focus(qs('#name'));"),'<input type="submit" value="UloÅ¾it">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Odstranit'."'>".confirm(sprintf('Odstranit %s?',$_GET["ns"]))."\n";echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["call"])){$da=($_GET["name"]?$_GET["name"]:$_GET["call"]);page_header('Zavolat'.": ".h($da),$m);$Kg=routine($_GET["call"],(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Bd=array();$Af=array();foreach($Kg["fields"]as$s=>$n){if(substr($n["inout"],-3)=="OUT")$Af[$s]="@".idf_escape($n["field"])." AS ".idf_escape($n["field"]);if(!$n["inout"]||substr($n["inout"],0,2)=="IN")$Bd[]=$s;}if(!$m&&$_POST){$Za=array();foreach($Kg["fields"]as$y=>$n){if(in_array($y,$Bd)){$X=process_input($n);if($X===false)$X="''";if(isset($Af[$y]))$f->query("SET @".idf_escape($n["field"])." = $X");}$Za[]=(isset($Af[$y])?"@".idf_escape($n["field"]):$X);}$G=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Za).")";$qh=microtime(true);$H=$f->multi_query($G);$za=$f->affected_rows;echo$b->selectQuery($G,$qh,!$H);if(!$H)echo"<p class='error'>".error()."\n";else{$g=connect();if(is_object($g))$g->select_db(DB);do{$H=$f->store_result();if(is_object($H))select($H,$g);else
echo"<p class='message'>".lang(array('Procedura byla zavolÃ¡na, byl zmÄ›nÄ›n %d zÃ¡znam.','Procedura byla zavolÃ¡na, byly zmÄ›nÄ›ny %d zÃ¡znamy.','Procedura byla zavolÃ¡na, bylo zmÄ›nÄ›no %d zÃ¡znamÅ¯.'),$za)."\n";}while($f->next_result());if($Af)select($f->query("SELECT ".implode(", ",$Af)));}}echo'
<form action="" method="post">
';if($Bd){echo"<table cellspacing='0'>\n";foreach($Bd
as$y){$n=$Kg["fields"][$y];$C=$n["field"];echo"<tr><th>".$b->fieldName($n);$Y=$_POST["fields"][$C];if($Y!=""){if($n["type"]=="enum")$Y=+$Y;if($n["type"]=="set")$Y=array_sum($Y);}input($n,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Zavolat">
<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$J=$_POST;if($_POST&&!$m&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$Ee=($_POST["drop"]?'CizÃ­ klÃ­Ä byl odstranÄ›n.':($C!=""?'CizÃ­ klÃ­Ä byl zmÄ›nÄ›n.':'CizÃ­ klÃ­Ä byl vytvoÅ™en.'));$A=ME."table=".urlencode($a);if(!$_POST["drop"]){$J["source"]=array_filter($J["source"],'strlen');ksort($J["source"]);$Jh=array();foreach($J["source"]as$y=>$X)$Jh[$y]=$J["target"][$y];$J["target"]=$Jh;}if($x=="sqlite")queries_redirect($A,$Ee,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($J)))));else{$c="ALTER TABLE ".table($a);$fc="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$fc,$A,$Ee);else{query_redirect($c.($C!=""?"$fc,":"")."\nADD".format_foreign_key($J),$A,$Ee);$m='ZdrojovÃ© a cÃ­lovÃ© sloupce musÃ­ mÃ­t stejnÃ½ datovÃ½ typ, nad cÃ­lovÃ½mi sloupci musÃ­ bÃ½t definovÃ¡n index a odkazovanÃ¡ data musÃ­ existovat.'."<br>$m";}}}page_header('CizÃ­ klÃ­Ä',$m,array("table"=>$a),h($a));if($_POST){ksort($J["source"]);if($_POST["add"])$J["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$J["target"]=array();}elseif($C!=""){$dd=foreign_keys($a);$J=$dd[$C];$J["source"][]="";}else{$J["table"]=$a;$J["source"]=array("");}$jh=array_keys(fields($a));$Jh=($a===$J["table"]?$jh:array_keys(fields($J["table"])));$ug=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($J["db"]==""&&$J["ns"]==""){echo'CÃ­lovÃ¡ tabulka:
',html_select("table",$ug,$J["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="ZmÄ›nit"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">Zdroj<th id="label-target">CÃ­l</thead>
';$Xd=0;foreach($J["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$jh,$X,($Xd==count($J["source"])-1?"foreignAddRow.call(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$Jh,$J["target"][$y],1,"label-target");$Xd++;}echo'</table>
<p>
PÅ™i smazÃ¡nÃ­: ',html_select("on_delete",array(-1=>"")+explode("|",$hf),$J["on_delete"]),' PÅ™i zmÄ›nÄ›: ',html_select("on_update",array(-1=>"")+explode("|",$hf),$J["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="UloÅ¾it">
<noscript><p><input type="submit" name="add" value="PÅ™idat sloupec"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="Odstranit">',confirm(sprintf('Odstranit %s?',$C));}echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$J=$_POST;$yf="VIEW";if($x=="pgsql"&&$a!=""){$P=table_status($a);$yf=strtoupper($P["Engine"]);}if($_POST&&!$m){$C=trim($J["name"]);$Ga=" AS\n$J[select]";$A=ME."table=".urlencode($C);$Ee='Pohled byl zmÄ›nÄ›n.';$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&$x!="sqlite"&&$U=="VIEW"&&$yf=="VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ga,$A,$Ee);else{$Lh=$C."_adminer_".uniqid();drop_create("DROP $yf ".table($a),"CREATE $U ".table($C).$Ga,"DROP $U ".table($C),"CREATE $U ".table($Lh).$Ga,"DROP $U ".table($Lh),($_POST["drop"]?substr(ME,0,-1):$A),'Pohled byl odstranÄ›n.',$Ee,'Pohled byl vytvoÅ™en.',$a,$C);}}if(!$_POST&&$a!=""){$J=view($a);$J["name"]=$a;$J["materialized"]=($yf!="VIEW");if(!$m)$m=error();}page_header(($a!=""?'PozmÄ›nit pohled':'VytvoÅ™it pohled'),$m,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>NÃ¡zev: <input name="name" value="',h($J["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$J["materialized"],'MaterializovanÃ½ pohled'):""),'<p>';textarea("select",$J["select"]);echo'<p>
<input type="submit" value="UloÅ¾it">
';if($a!=""){echo'<input type="submit" name="drop" value="Odstranit">',confirm(sprintf('Odstranit %s?',$a));}echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Od=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$sh=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$J=$_POST;if($_POST&&!$m){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'UdÃ¡lost byla odstranÄ›na.');elseif(in_array($J["INTERVAL_FIELD"],$Od)&&isset($sh[$J["STATUS"]])){$Pg="\nON SCHEDULE ".($J["INTERVAL_VALUE"]?"EVERY ".q($J["INTERVAL_VALUE"])." $J[INTERVAL_FIELD]".($J["STARTS"]?" STARTS ".q($J["STARTS"]):"").($J["ENDS"]?" ENDS ".q($J["ENDS"]):""):"AT ".q($J["STARTS"]))." ON COMPLETION".($J["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'UdÃ¡lost byla zmÄ›nÄ›na.':'UdÃ¡lost byla vytvoÅ™ena.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Pg.($aa!=$J["EVENT_NAME"]?"\nRENAME TO ".idf_escape($J["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($J["EVENT_NAME"]).$Pg)."\n".$sh[$J["STATUS"]]." COMMENT ".q($J["EVENT_COMMENT"]).rtrim(" DO\n$J[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'PozmÄ›nit udÃ¡lost'.": ".h($aa):'VytvoÅ™it udÃ¡lost'),$m);if(!$J&&$aa!=""){$K=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$J=reset($K);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>NÃ¡zev<td><input name="EVENT_NAME" value="',h($J["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">ZaÄÃ¡tek<td><input name="STARTS" value="',h("$J[EXECUTE_AT]$J[STARTS]"),'">
<tr><th title="datetime">Konec<td><input name="ENDS" value="',h($J["ENDS"]),'">
<tr><th>KaÅ¾dÃ½ch<td><input type="number" name="INTERVAL_VALUE" value="',h($J["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Od,$J["INTERVAL_FIELD"]),'<tr><th>Stav<td>',html_select("STATUS",$sh,$J["STATUS"]),'<tr><th>KomentÃ¡Å™<td><input name="EVENT_COMMENT" value="',h($J["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$J["ON_COMPLETION"]=="PRESERVE",'Po dokonÄenÃ­ zachovat'),'</table>
<p>';textarea("EVENT_DEFINITION",$J["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="UloÅ¾it">
';if($aa!=""){echo'<input type="submit" name="drop" value="Odstranit">',confirm(sprintf('Odstranit %s?',$aa));}echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=($_GET["name"]?$_GET["name"]:$_GET["procedure"]);$Kg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$J=$_POST;$J["fields"]=(array)$J["fields"];if($_POST&&!process_fields($J["fields"])&&!$m){$vf=routine($_GET["procedure"],$Kg);$Lh="$J[name]_adminer_".uniqid();drop_create("DROP $Kg ".routine_id($da,$vf),create_routine($Kg,$J),"DROP $Kg ".routine_id($J["name"],$J),create_routine($Kg,array("name"=>$Lh)+$J),"DROP $Kg ".routine_id($Lh,$J),substr(ME,0,-1),'Procedura byla odstranÄ›na.','Procedura byla zmÄ›nÄ›na.','Procedura byla vytvoÅ™ena.',$da,$J["name"]);}page_header(($da!=""?(isset($_GET["function"])?'ZmÄ›nit funkci':'ZmÄ›nit proceduru').": ".h($da):(isset($_GET["function"])?'VytvoÅ™it funkci':'VytvoÅ™it proceduru')),$m);if(!$_POST&&$da!=""){$J=routine($_GET["procedure"],$Kg);$J["name"]=$da;}$pb=get_vals("SHOW CHARACTER SET");sort($pb);$Lg=routine_languages();echo'
<form action="" method="post" id="form">
<p>NÃ¡zev: <input name="name" value="',h($J["name"]),'" maxlength="64" autocapitalize="off">
',($Lg?'Jazyk'.": ".html_select("language",$Lg,$J["language"])."\n":""),'<input type="submit" value="UloÅ¾it">
<table cellspacing="0" class="nowrap">
';edit_fields($J["fields"],$pb,$Kg);if(isset($_GET["function"])){echo"<tr><td>".'NÃ¡vratovÃ½ typ';edit_type("returns",$J["returns"],$pb,array(),($x=="pgsql"?array("void","trigger"):array()));}echo'</table>
<p>';textarea("definition",$J["definition"]);echo'<p>
<input type="submit" value="UloÅ¾it">
';if($da!=""){echo'<input type="submit" name="drop" value="Odstranit">',confirm(sprintf('Odstranit %s?',$da));}echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$J=$_POST;if($_POST&&!$m){$_=substr(ME,0,-1);$C=trim($J["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,'Sekvence byla odstranÄ›na.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,'Sekvence byla vytvoÅ™ena.');elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,'Sekvence byla zmÄ›nÄ›na.');else
redirect($_);}page_header($fa!=""?'PozmÄ›nit sekvenci'.": ".h($fa):'VytvoÅ™it sekvenci',$m);if(!$J)$J["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($J["name"]),'" autocapitalize="off">
<input type="submit" value="UloÅ¾it">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Odstranit'."'>".confirm(sprintf('Odstranit %s?',$fa))."\n";echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$J=$_POST;if($_POST&&!$m){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,'Typ byl odstranÄ›n.');else
query_redirect("CREATE TYPE ".idf_escape(trim($J["name"]))." $J[as]",$_,'Typ byl vytvoÅ™en.');}page_header($ga!=""?'PozmÄ›nit typ'.": ".h($ga):'VytvoÅ™it typ',$m);if(!$J)$J["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Odstranit'."'>".confirm(sprintf('Odstranit %s?',$ga))."\n";else{echo"<input name='name' value='".h($J['name'])."' autocapitalize='off'>\n";textarea("as",$J["as"]);echo"<p><input type='submit' value='".'UloÅ¾it'."'>\n";}echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$li=trigger_options();$J=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$m&&in_array($_POST["Timing"],$li["Timing"])&&in_array($_POST["Event"],$li["Event"])&&in_array($_POST["Type"],$li["Type"])){$gf=" ON ".table($a);$fc="DROP TRIGGER ".idf_escape($C).($x=="pgsql"?$gf:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($fc,$A,'Trigger byl odstranÄ›n.');else{if($C!="")queries($fc);queries_redirect($A,($C!=""?'Trigger byl zmÄ›nÄ›n.':'Trigger byl vytvoÅ™en.'),queries(create_trigger($gf,$_POST)));if($C!="")queries(create_trigger($gf,$J+array("Type"=>reset($li["Type"]))));}}$J=$_POST;}page_header(($C!=""?'ZmÄ›nit trigger'.": ".h($C):'VytvoÅ™it trigger'),$m,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>ÄŒas<td>',html_select("Timing",$li["Timing"],$J["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>UdÃ¡lost<td>',html_select("Event",$li["Event"],$J["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$li["Event"])?" <input name='Of' value='".h($J["Of"])."' class='hidden'>":""),'<tr><th>Typ<td>',html_select("Type",$li["Type"],$J["Type"]),'</table>
<p>NÃ¡zev: <input name="Trigger" value="',h($J["Trigger"]),'" maxlength="64" autocapitalize="off">
',script("qs('#form')['Timing'].onchange();"),'<p>';textarea("Statement",$J["Statement"]);echo'<p>
<input type="submit" value="UloÅ¾it">
';if($C!=""){echo'<input type="submit" name="drop" value="Odstranit">',confirm(sprintf('Odstranit %s?',$C));}echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$fg=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$J){foreach(explode(",",($J["Privilege"]=="Grant option"?"":$J["Context"]))as$Ab)$fg[$Ab][$J["Privilege"]]=$J["Comment"];}$fg["Server Admin"]+=$fg["File access on server"];$fg["Databases"]["Create routine"]=$fg["Procedures"]["Create routine"];unset($fg["Procedures"]["Create routine"]);$fg["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$fg["Columns"][$X]=$fg["Tables"][$X];unset($fg["Server Admin"]["Usage"]);foreach($fg["Tables"]as$y=>$X)unset($fg["Databases"][$y]);$Re=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Re[$X]=(array)$Re[$X]+(array)$_POST["grants"][$y];}$kd=array();$ef="";if(isset($_GET["host"])&&($H=$f->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($J=$H->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$J[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$xe,PREG_SET_ORDER)){foreach($xe
as$X){if($X[1]!="USAGE")$kd["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$J[0]))$kd["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$J[0],$B))$ef=$B[1];}}if($_POST&&!$m){$ff=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $ff",ME."privileges=",'UÅ¾ivatel byl odstranÄ›n.');else{$Te=q($_POST["user"])."@".q($_POST["host"]);$Nf=$_POST["pass"];if($Nf!=''&&!$_POST["hashed"]){$Nf=$f->result("SELECT PASSWORD(".q($Nf).")");$m=!$Nf;}$Fb=false;if(!$m){if($ff!=$Te){$Fb=queries((min_version(5)?"CREATE USER":"GRANT USAGE ON *.* TO")." $Te IDENTIFIED BY PASSWORD ".q($Nf));$m=!$Fb;}elseif($Nf!=$ef)queries("SET PASSWORD FOR $Te = ".q($Nf));}if(!$m){$Hg=array();foreach($Re
as$Ze=>$jd){if(isset($_GET["grant"]))$jd=array_filter($jd);$jd=array_keys($jd);if(isset($_GET["grant"]))$Hg=array_diff(array_keys(array_filter($Re[$Ze],'strlen')),$jd);elseif($ff==$Te){$cf=array_keys((array)$kd[$Ze]);$Hg=array_diff($cf,$jd);$jd=array_diff($jd,$cf);unset($kd[$Ze]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ze,$B)&&(!grant("REVOKE",$Hg,$B[2]," ON $B[1] FROM $Te")||!grant("GRANT",$jd,$B[2]," ON $B[1] TO $Te"))){$m=true;break;}}}if(!$m&&isset($_GET["host"])){if($ff!=$Te)queries("DROP USER $ff");elseif(!isset($_GET["grant"])){foreach($kd
as$Ze=>$Hg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ze,$B))grant("REVOKE",array_keys($Hg),$B[2]," ON $B[1] FROM $Te");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'UÅ¾ivatel byl zmÄ›nÄ›n.':'UÅ¾ivatel byl vytvoÅ™en.'),!$m);if($Fb)$f->query("DROP USER $Te");}}page_header((isset($_GET["host"])?'UÅ¾ivatel'.": ".h("$ha@$_GET[host]"):'VytvoÅ™it uÅ¾ivatele'),$m,array("privileges"=>array('','OprÃ¡vnÄ›nÃ­')));if($_POST){$J=$_POST;$kd=$Re;}else{$J=$_GET+array("host"=>$f->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$J["pass"]=$ef;if($ef!="")$J["hashed"]=true;$kd[(DB==""||$kd?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($J["host"]),'" autocapitalize="off">
<tr><th>UÅ¾ivatel<td><input name="user" maxlength="16" value="',h($J["user"]),'" autocapitalize="off">
<tr><th>Heslo<td><input name="pass" id="pass" value="',h($J["pass"]),'" autocomplete="new-password">
';if(!$J["hashed"])echo
script("typePassword(qs('#pass'));");echo
checkbox("hashed",1,$J["hashed"],'ZahaÅ¡ovanÃ©',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".'OprÃ¡vnÄ›nÃ­'.doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($kd
as$Ze=>$jd){echo'<th>'.($Ze!="*.*"?"<input name='objects[$s]' value='".h($Ze)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'DatabÃ¡ze',"Tables"=>'Tabulka',"Columns"=>'Sloupec',"Procedures"=>'Procedura',)as$Ab=>$Vb){foreach((array)$fg[$Ab]as$eg=>$ub){echo"<tr".odd()."><td".($Vb?">$Vb<td":" colspan='2'").' lang="en" title="'.h($ub).'">'.h($eg);$s=0;foreach($kd
as$Ze=>$jd){$C="'grants[$s][".h(strtoupper($eg))."]'";$Y=$jd[strtoupper($eg)];if($Ab=="Server Admin"&&$Ze!=(isset($kd["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".'Povolit'."<option value='0'".($Y=="0"?" selected":"").">".'ZakÃ¡zat'."</select>";else{echo"<td align='center'><label class='block'>","<input type='checkbox' name=$C value='1'".($Y?" checked":"").($eg=="All privileges"?" id='grants-$s-all'>":">".($eg=="Grant option"?"":script("qsl('input').onclick = function () { if (this.checked) formUncheck('grants-$s-all'); };"))),"</label>";}$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="UloÅ¾it">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Odstranit">',confirm(sprintf('Odstranit %s?',"$ha@$_GET[host]"));}echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$m){$ee=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$ee++;}queries_redirect(ME."processlist=",lang(array('Byl ukonÄen %d proces.','Byly ukonÄeny %d procesy.','Bylo ukonÄeno %d procesÅ¯.'),$ee),$ee||!$_POST["kill"]);}page_header('Seznam procesÅ¯',$m);echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap checkable">
',script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});");$s=-1;foreach(process_list()as$s=>$J){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($J
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$J[$x=="sql"?"Id":"pid"],0):"");foreach($J
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$J["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($J["db"]!=""?"db=".urlencode($J["db"])."&":"")."sql=".urlencode($X)).'">'.'Klonovat'.'</a>':nbsp($X));echo"\n";}echo'</table>
',script("tableCheck();"),'<p>
';if(support("kill")){echo($s+1)."/".sprintf('%d celkem',max_connections()),"<p><input type='submit' value='".'UkonÄit'."'>\n";}echo'<input type="hidden" name="token" value="',$ai,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$o=fields($a);$dd=column_foreign_keys($a);$bf=$S["Oid"];parse_str($_COOKIE["adminer_import"],$ya);$Ig=array();$e=array();$Ph=null;foreach($o
as$y=>$n){$C=$b->fieldName($n);if(isset($n["privileges"]["select"])&&$C!=""){$e[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($n))$Ph=$b->selectLengthProcess();}$Ig+=$n["privileges"];}list($L,$ld)=$b->selectColumnsProcess($e,$w);$Sd=count($ld)<count($L);$Z=$b->selectSearchProcess($o,$w);$rf=$b->selectOrderProcess($o,$w);$z=$b->selectLimitProcess();if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ti=>$J){$Ga=convert_field($o[key($J)]);$L=array($Ga?$Ga:idf_escape(key($J)));$Z[]=where_check($ti,$o);$I=$dc->select($a,$L,$Z,$L);if($I)echo
reset($I->fetch_row());}exit;}$ag=$vi=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$ag=array_flip($v["columns"]);$vi=($L?$ag:array());foreach($vi
as$y=>$X){if(in_array(idf_escape($y),$L))unset($vi[$y]);}break;}}if($bf&&$vi===null){$ag=$vi=array($bf=>0);$w[]=array("type"=>"PRIMARY","columns"=>array($bf));}if($_POST&&!$m){$Vi=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$fb=array();foreach($_POST["check"]as$cb)$fb[]=where_check($cb,$o);$Vi[]="((".implode(") OR (",$fb)."))";}$Vi=($Vi?"\nWHERE ".implode(" AND ",$Vi):"");if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");$hd=($L?implode(", ",$L):"*").convert_fields($e,$o,$L)."\nFROM ".table($a);$nd=($ld&&$Sd?"\nGROUP BY ".implode(", ",$ld):"").($rf?"\nORDER BY ".implode(", ",$rf):"");if(!is_array($_POST["check"])||$vi===array())$G="SELECT $hd$Vi$nd";else{$ri=array();foreach($_POST["check"]as$X)$ri[]="(SELECT".limit($hd,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o).$nd,1).")";$G=implode(" UNION ALL ",$ri);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($Z,$dd)){if($_POST["save"]||$_POST["delete"]){$H=true;$za=0;$O=array();if(!$_POST["delete"]){foreach($e
as$C=>$X){$X=process_input($o[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$G="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($vi===array()&&is_array($_POST["check"]))||$Sd){$H=($_POST["delete"]?$dc->delete($a,$Vi):($_POST["clone"]?queries("INSERT $G$Vi"):$dc->update($a,$O,$Vi)));$za=$f->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Ri="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o);$H=($_POST["delete"]?$dc->delete($a,$Ri,1):($_POST["clone"]?queries("INSERT".limit1($a,$G,$Ri)):$dc->update($a,$O,$Ri,1)));if(!$H)break;$za+=$f->affected_rows;}}}$Ee=lang(array('Byl ovlivnÄ›n %d zÃ¡znam.','Byly ovlivnÄ›ny %d zÃ¡znamy.','Bylo ovlivnÄ›no %d zÃ¡znamÅ¯.'),$za);if($_POST["clone"]&&$H&&$za==1){$je=last_id();if($je)$Ee=sprintf('PoloÅ¾ka%s byla vloÅ¾ena.'," $je");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$Ee,$H);if(!$_POST["delete"]){edit_form($a,$o,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$m='Ctrl+kliknÄ›te na polÃ­Äko, kterÃ© chcete zmÄ›nit.';else{$H=true;$za=0;foreach($_POST["val"]as$ti=>$J){$O=array();foreach($J
as$y=>$X){$y=bracket_escape($y,1);$O[idf_escape($y)]=(preg_match('~char|text~',$o[$y]["type"])||$X!=""?$b->processInput($o[$y],$X):"NULL");}$H=$dc->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($ti,$o),!($Sd||$vi===array())," ");if(!$H)break;$za+=$f->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Byl ovlivnÄ›n %d zÃ¡znam.','Byly ovlivnÄ›ny %d zÃ¡znamy.','Bylo ovlivnÄ›no %d zÃ¡znamÅ¯.'),$za),$H);}}elseif(!is_string($Tc=get_file("csv_file",true)))$m=upload_error($Tc);elseif(!preg_match('~~u',$Tc))$m='Soubor musÃ­ bÃ½t v kÃ³dovÃ¡nÃ­ UTF-8.';else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$H=true;$rb=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Tc,$xe);$za=count($xe[0]);$dc->begin();$M=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$K=array();foreach($xe[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$M]*)$M~",$X.$M,$ye);if(!$y&&!array_diff($ye[1],$rb)){$rb=$ye[1];$za--;}else{$O=array();foreach($ye[1]as$s=>$mb)$O[idf_escape($rb[$s])]=($mb==""&&$o[$rb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$mb))));$K[]=$O;}}$H=(!$K||$dc->insertUpdate($a,$K,$ag));if($H)$H=$dc->commit();queries_redirect(remove_from_uri("page"),lang(array('Byl importovÃ¡n %d zÃ¡znam.','Byly importovÃ¡ny %d zÃ¡znamy.','Bylo importovÃ¡no %d zÃ¡znamÅ¯.'),$za),$H);$dc->rollback();}}}$Bh=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header('Vypsat'.": $Bh",$m);$O=null;if(isset($Ig["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if($dd[$X["col"]]&&count($dd[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$O);if(!$e&&support("table"))echo"<p class='error'>".'NepodaÅ™ilo se vypsat tabulku'.($o?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$e);$b->selectSearchPrint($Z,$e,$w);$b->selectOrderPrint($rf,$e,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($Ph);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$gd=$f->result(count_rows($a,$Z,$Sd,$ld));$E=floor(max(0,$gd-1)/$z);}$Ug=$L;$md=$ld;if(!$Ug){$Ug[]="*";$Bb=convert_fields($e,$o,$L);if($Bb)$Ug[]=substr($Bb,2);}foreach($L
as$y=>$X){$n=$o[idf_unescape($X)];if($n&&($Ga=convert_field($n)))$Ug[$y]="$Ga AS $X";}if(!$Sd&&$vi){foreach($vi
as$y=>$X){$Ug[]=idf_escape($y);if($md)$md[]=idf_escape($y);}}$H=$dc->select($a,$Ug,$Z,$md,$rf,$z,$E,true);if(!$H)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$H->seek($z*$E);$sc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($E&&$x=="oracle")unset($J["RNUM"]);$K[]=$J;}if($_GET["page"]!="last"&&$z!=""&&$ld&&$Sd&&$x=="sql")$gd=$f->result(" SELECT FOUND_ROWS()");if(!$K)echo"<p class='message'>".'Å½Ã¡dnÃ© Å™Ã¡dky.'."\n";else{$Pa=$b->backwardKeys($a,$Bh);echo"<table id='table' cellspacing='0' class='nowrap checkable'>",script("mixin(qs('#table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true), onkeydown: editingKeydown});"),"<thead><tr>".(!$ld&&$L?"":"<td><input type='checkbox' id='all-page' class='jsonly'>".script("qs('#all-page').onclick = partial(formCheck, /check/);","")." <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'ZmÄ›nit'."</a>");$Qe=array();$id=array();reset($L);$pg=1;foreach($K[0]as$y=>$X){if(!isset($vi[$y])){$X=$_GET["columns"][key($L)];$n=$o[$L?($X?$X["col"]:current($L)):$y];$C=($n?$b->fieldName($n,$pg):($X["fun"]?"*":$y));if($C!=""){$pg++;$Qe[$y]=$C;$d=idf_escape($y);$yd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Vb="&desc%5B0%5D=1";echo"<th>".script("mixin(qsl('th'), {onmouseover: partial(columnMouse), onmouseout: partial(columnMouse, ' hidden')});",""),'<a href="'.h($yd.($rf[0]==$d||$rf[0]==$y||(!$rf&&$Sd&&$ld[0]==$d)?$Vb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($yd.$Vb)."' title='".'sestupnÄ›'."' class='text'> â†“</a>";if(!$X["fun"]){echo'<a href="#fieldset-search" title="'.'Vyhledat'.'" class="text jsonly"> =</a>',script("qsl('a').onclick = partial(selectSearch, '".js_escape($y)."');");}echo"</span>";}$id[$y]=$X["fun"];next($L);}}$pe=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$y=>$X)$pe[$y]=max($pe[$y],min(40,strlen(utf8_decode($X))));}}echo($Pa?"<th>".'Vztahy':"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($K,$dd)as$Pe=>$J){$si=unique_array($K[$Pe],$w);if(!$si){$si=array();foreach($K[$Pe]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$si[$y]=$X;}}$ti="";foreach($si
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&preg_match('~char|text|enum|set~',$o[$y]["type"])&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x!='sql'||preg_match("~^utf8~",$o[$y]["collation"])?$y:"CONVERT($y USING ".charset($f).")").")";$X=md5($X);}$ti.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$ld&&$L?"":"<td>".checkbox("check[]",substr($ti,1),in_array(substr($ti,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Sd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$ti)."'>".'upravit'."</a>"));foreach($J
as$y=>$X){if(isset($Qe[$y])){$n=$o[$y];if($X!=""&&(!isset($sc[$y])||$sc[$y]!=""))$sc[$y]=(is_mail($X)?$Qe[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$n["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$ti;if(!$_&&$X!==null){foreach((array)$dd[$y]as$p){if(count($dd[$y])==1||end($p["source"])==$y){$_="";foreach($p["source"]as$s=>$jh)$_.=where_link($s,$p["target"][$s],$K[$Pe][$jh]);$_=($p["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($p["db"]),ME):ME).'select='.urlencode($p["table"]).$_;if($p["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($p["ns"]),$_);if(count($p["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$si))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($si
as$Yd=>$W)$_.=where_link($s++,$Yd,$W);}$X=select_value($X,$_,$n,$Ph);$t=h("val[$ti][".bracket_escape($y)."]");$Y=$_POST["val"][$ti][bracket_escape($y)];$nc=!is_array($J[$y])&&is_utf8($X)&&$K[$Pe][$y]==$J[$y]&&!$id[$y];$Oh=preg_match('~text|lob~',$n["type"]);if(($_GET["modify"]&&$nc)||$Y!==null){$pd=h($Y!==null?$Y:$J[$y]);echo"<td>".($Oh?"<textarea name='$t' cols='30' rows='".(substr_count($J[$y],"\n")+1)."'>$pd</textarea>":"<input name='$t' value='$pd' size='$pe[$y]'>");}else{$te=strpos($X,"<i>...</i>");echo"<td id='$t'>$X</td>",script("qsl('td').onclick = partialArg(selectClick, ".($te?2:($Oh?1:0)).($nc?"":", '".h('Ke zmÄ›nÄ› tÃ©to hodnoty pouÅ¾ijte odkaz upravit.')."'").");","");}}}if($Pa)echo"<td>";$b->backwardKeysPrint($Pa,$K[$Pe]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($K||$E)&&!is_ajax()){$Bc=true;if($_GET["page"]!="last"){if($z==""||(count($K)<$z&&($K||!$E)))$gd=($E?$E*$z:0)+count($K);elseif($x!="sql"||!$Sd){$gd=($Sd?false:found_rows($S,$Z));if($gd<max(1e4,2*($E+1)*$z))$gd=reset(slow_query(count_rows($a,$Z,$Sd,$ld)));else$Bc=false;}}if($z!=""&&($gd===false||$gd>$z||$E)){echo"<p class='pages'>";$_e=($gd===false?$E+(count($K)>=$z?2:1):floor(($gd-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page")).'">'.'StrÃ¡nka'."</a>:",script("qsl('a').onclick = function () { pageClick(this.href, +prompt('".'StrÃ¡nka'."', '".($E+1)."')); return false; };"),pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($_e,$E+5);$s++)echo
pagination($s,$E);if($_e>0){echo($E+5<$_e?" ...":""),($Bc&&$gd!==false?pagination($_e,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$_e'>".'poslednÃ­'."</a>");}echo(($gd===false?count($K)+1:$gd-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" class="loadmore">'.'NahrÃ¡t dalÅ¡Ã­ data'.'</a>'.script("qsl('a').onclick = partial(selectLoadMore, ".(+$z).", '".'NahrÃ¡vÃ¡ se'."...');",""):'');}else{echo'StrÃ¡nka'.":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($_e>$E?pagination($E+1,$E).($_e>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($gd!==false?"(".($Bc?"":"~ ").lang(array('%d Å™Ã¡dek','%d Å™Ã¡dky','%d Å™Ã¡dkÅ¯'),$gd).") ":"");$ac=($Bc?"":"~ ").$gd;echo
checkbox("all",1,0,'celÃ½ vÃ½sledek',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$ac' : checked); selectCount('selected2', this.checked || !checked ? '$ac' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>ZmÄ›nit</legend><div>
<input type="submit" value="UloÅ¾it"',($_GET["modify"]?'':' title="'.'Ctrl+kliknÄ›te na polÃ­Äko, kterÃ© chcete zmÄ›nit.'.'"'),'>
</div></fieldset>
<fieldset><legend>OznaÄenÃ© <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Upravit">
<input type="submit" name="clone" value="Klonovat">
<input type="submit" name="delete" value="Smazat">',confirm(),'</div></fieldset>
';}$ed=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($ed['sql']);break;}}if($ed){print_fieldset("export",'Export'." <span id='selected2'></span>");$Bf=$b->dumpOutput();echo($Bf?html_select("output",$Bf,$ya["output"])." ":""),html_select("format",$ed,$ya["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($sc,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$ai'></p>\n","</form>\n",(!$ld&&$L?"":script("tableCheck();"));}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?'Stav':'PromÄ›nnÃ©');$Ii=($P?show_status():show_variables());if(!$Ii)echo"<p class='message'>".'Å½Ã¡dnÃ© Å™Ã¡dky.'."\n";else{echo"<table cellspacing='0'>\n";foreach($Ii
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($P?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$zh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$S){json_row("Comment-$C",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$C",nbsp($S[$y]));foreach($zh+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$C",($y=="Rows"&&$X&&$S["Engine"]==($mh=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($zh[$y]))$zh[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$C");}}}foreach($zh
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$f->query("KILL ".number($_POST["kill"]));elseif($_GET["script"]=="version"){$q=file_open_lock(get_temp_dir()."/adminer.version");if($q)file_write_unlock($q,serialize(array("signature"=>$_POST["signature"],"version"=>$_POST["version"])));}else{foreach(count_tables($b->databases())as$l=>$X){json_row("tables-$l",$X);json_row("size-$l",db_size($l));}json_row("");}exit;}else{$Hh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Hh&&!$m&&!$_POST["search"]){$H=true;$Ee="";if($x=="sql"&&$_POST["tables"]&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$H=truncate_tables($_POST["tables"]);$Ee='Tabulky byly vyprÃ¡zdnÄ›ny.';}elseif($_POST["move"]){$H=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Ee='Tabulky byly pÅ™esunuty.';}elseif($_POST["copy"]){$H=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$Ee='Tabulky byly zkopÃ­rovÃ¡ny.';}elseif($_POST["drop"]){if($_POST["views"])$H=drop_views($_POST["views"]);if($H&&$_POST["tables"])$H=drop_tables($_POST["tables"]);$Ee='Tabulky byly odstranÄ›ny.';}elseif($x!="sql"){$H=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$Ee='Tabulky byly optimalizovÃ¡ny.';}elseif(!$_POST["tables"])$Ee='Å½Ã¡dnÃ© tabulky.';elseif($H=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($J=$H->fetch_assoc())$Ee.="<b>".h($J["Table"])."</b>: ".h($J["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$Ee,$H);}page_header(($_GET["ns"]==""?'DatabÃ¡ze'.": ".h(DB):'SchÃ©ma'.": ".h($_GET["ns"])),$m,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tabulky a pohledy'."</h3>\n";$Gh=tables_list();if(!$Gh)echo"<p class='message'>".'Å½Ã¡dnÃ© tabulky.'."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".'Vyhledat data v tabulkÃ¡ch'." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'>",script("qsl('input').onkeydown = partialArg(bodyKeydown, 'search');","")," <input type='submit' name='search' value='".'Vyhledat'."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$bc=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),'<thead><tr class="wrap">','<td><input id="check-all" type="checkbox" class="jsonly">'.script("qs('#check-all').onclick = partial(formCheck, /^(tables|views)\[/);",""),'<th>'.'Tabulka','<td>'.'ÃšloÅ¾iÅ¡tÄ›'.doc_link(array('sql'=>'storage-engines.html')),'<td>'.'PorovnÃ¡vÃ¡nÃ­'.doc_link(array('sql'=>'charset-mysql.html')),'<td>'.'Velikost dat'.$bc,'<td>'.'Velikost indexÅ¯'.$bc,'<td>'.'VolnÃ© mÃ­sto'.$bc,'<td>'.'Auto Increment'.doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.'Å˜Ã¡dkÅ¯'.$bc,(support("comment")?'<td>'.'KomentÃ¡Å™'.$bc:''),"</thead>\n";$T=0;foreach($Gh
as$C=>$U){$Li=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$C);echo'<tr'.odd().'><td>'.checkbox(($Li?"views[]":"tables[]"),$C,in_array($C,$Hh,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($C)."' title='".'Zobrazit strukturu'."' id='$t'>".h($C).'</a>':h($C));if($Li){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.'PozmÄ›nit pohled'.'">'.(preg_match('~materialized~i',$U)?'MaterializovanÃ½ pohled':'Pohled').'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.'Vypsat data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'PozmÄ›nit tabulku'),"Index_length"=>array("indexes",'PozmÄ›nit indexy'),"Data_free"=>array("edit",'NovÃ¡ poloÅ¾ka'),"Auto_increment"=>array("auto_increment=1&create",'PozmÄ›nit tabulku'),"Rows"=>array("select",'Vypsat data'),)as$y=>$_){$t=" id='$y-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$t title='$_[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($C)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d celkem',count($Gh)),"<td>".nbsp($x=="sql"?$f->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Fi="<input type='submit' value='".'VyÄistit'."'> ".on_help("'VACUUM'");$nf="<input type='submit' name='optimize' value='".'Optimalizovat'."'> ".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'");echo"<fieldset><legend>".'OznaÄenÃ©'." <span id='selected'></span></legend><div>".($x=="sqlite"?$Fi:($x=="pgsql"?$Fi.$nf:($x=="sql"?"<input type='submit' value='".'Analyzovat'."'> ".on_help("'ANALYZE TABLE'").$nf."<input type='submit' name='check' value='".'Zkontrolovat'."'> ".on_help("'CHECK TABLE'")."<input type='submit' name='repair' value='".'Opravit'."'> ".on_help("'REPAIR TABLE'"):"")))."<input type='submit' name='truncate' value='".'VyprÃ¡zdnit'."'> ".on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'")).confirm()."<input type='submit' name='drop' value='".'Odstranit'."'>".on_help("'DROP TABLE'").confirm()."\n";$k=(support("scheme")?$b->schemas():$b->databases());if(count($k)!=1&&$x!="sqlite"){$l=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'PÅ™esunout do jinÃ© databÃ¡ze'.": ",($k?html_select("target",$k,$l):'<input name="target" value="'.h($l).'" autocapitalize="off">')," <input type='submit' name='move' value='".'PÅ™esunout'."'>",(support("copy")?" <input type='submit' name='copy' value='".'ZkopÃ­rovat'."'>":""),"\n";}echo"<input type='hidden' name='all' value=''>";echo
script("qsl('input').onclick = function () { selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")." }"),"<input type='hidden' name='token' value='$ai'>\n","</div></fieldset>\n";}echo"</form>\n",script("tableCheck();");}echo'<p class="links"><a href="'.h(ME).'create=">'.'VytvoÅ™it tabulku'."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.'VytvoÅ™it pohled'."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".'Procedury a funkce'."</h3>\n";$Mg=routines();if($Mg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'NÃ¡zev'.'<td>'.'Typ'.'<td>'.'NÃ¡vratovÃ½ typ'."<td>&nbsp;</thead>\n";odd('');foreach($Mg
as$J){$C=($J["SPECIFIC_NAME"]==$J["ROUTINE_NAME"]?"":"&name=".urlencode($J["ROUTINE_NAME"]));echo'<tr'.odd().'>','<th><a href="'.h(ME.($J["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($J["SPECIFIC_NAME"]).$C).'">'.h($J["ROUTINE_NAME"]).'</a>','<td>'.h($J["ROUTINE_TYPE"]),'<td>'.h($J["DTD_IDENTIFIER"]),'<td><a href="'.h(ME.($J["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($J["SPECIFIC_NAME"]).$C).'">'.'ZmÄ›nit'."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'VytvoÅ™it proceduru'.'</a>':'').'<a href="'.h(ME).'function=">'.'VytvoÅ™it funkci'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sekvence'."</h3>\n";$Zg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($Zg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'NÃ¡zev'."</thead>\n";odd('');foreach($Zg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".'VytvoÅ™it sekvenci'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'UÅ¾ivatelskÃ© typy'."</h3>\n";$Di=types();if($Di){echo"<table cellspacing='0'>\n","<thead><tr><th>".'NÃ¡zev'."</thead>\n";odd('');foreach($Di
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".'VytvoÅ™it typ'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'UdÃ¡losti'."</h3>\n";$K=get_rows("SHOW EVENTS");if($K){echo"<table cellspacing='0'>\n","<thead><tr><th>".'NÃ¡zev'."<td>".'PlÃ¡n'."<td>".'ZaÄÃ¡tek'."<td>".'Konec'."<td></thead>\n";foreach($K
as$J){echo"<tr>","<th>".h($J["Name"]),"<td>".($J["Execute at"]?'V danÃ½ Äas'."<td>".$J["Execute at"]:'KaÅ¾dÃ½ch'." ".$J["Interval value"]." ".$J["Interval field"]."<td>$J[Starts]"),"<td>$J[Ends]",'<td><a href="'.h(ME).'event='.urlencode($J["Name"]).'">'.'ZmÄ›nit'.'</a>';}echo"</table>\n";$_c=$f->result("SELECT @@event_scheduler");if($_c&&$_c!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($_c)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.'VytvoÅ™it udÃ¡lost'."</a>\n";}if($Gh)echo
script("ajaxSetHtml('".js_escape(ME)."script=db');");}}}page_footer();