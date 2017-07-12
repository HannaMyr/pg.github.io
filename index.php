<? PHP
$ Base  =  " http://api.openweathermap.org/data/2.5/weather?zip= " ;
$ Zip  =  $ _POST [ " name " ];
$ Country  =  " , us " ;
$ Degree  =  " & units = imperial " ;
$ Result  =  $ base  .  $ Zip  .  $ Страна  .  $  .  " & APPID = 4f93138a79c422a9cac41912f152141a " ;
Echo  $ result ;
$ Predecode  =  file_get_contents ( $ result );
$ Test  =  json_decode ( $ predecode , true );
$ Page  =  $ _SERVER [ ' PHP_SELF ' ];
$ Sec  =  " 200 " ;
? >

<? PHP
$ Cookie_name  =  " zip " ;
Setcookie ( $ cookie_name , $ zip , time () + ( 86400  *  30 ), " / " ); // 86400 = 1 день
? >

<! DOCTYPE html>
< Html >
			< Head >
		< Meta  name = " viewport "  content = " width = device-width, initial-scale = 1 " >
        < Meta  http-equiv = " refresh "  content = " <? Php echo $ sec ? > ; URL = ' <? Php echo $ page ? > ' "     >
        < Meta  http-equiv = " X-UA-Compatible "  content = " IE = edge; chrome = 1 " />
		< Link  rel = " stylesheet "  type = " text / css "  href = " css / style.css " >
        < Meta  http-equiv = " Content-Type "  content = " text / html; charset = utf-8 " />
        < Script  src = " https://code.jquery.com/jquery-2.1.4.min.js " > < / script >
			</ Head >

< Form  action = " index.php "  method = " post " >
Страна: < входной  тип = « текст »  название = « имя » > < бр >
< Input  type = " submit " >
</ Form >



< Script  src = " js / clock.js " > </ script >

< Body >
    < Div  class = " container " >
        < Div  class = " card " >
            < Div  class = " city " > <? Php echo $ test [ ' name ' ] ? > </ Div >   
            < Div  class = " date "  id = " daymonth " > </ div >
            < Div  class = " container-sun " >
                < Svg  class = " svg-sun "  version = " 1.1 "  viewBox = " 0 0 100 100 "  preserveAspectRatio = " xMinYMin meet " >
                    < Круг  cx = " 50 "  cy = " 50 "  r = " 35 "  id = " sun " > </ circle >
                </ Svg >
            </ Div >

            < Div  class = " temp " >
                <? Php echo floor ( $ test [ ' main ' ] [ ' temp ' ]) ? > ° F   
             </ Div >
        </ Div >
    </ Div >

</ Body >
< Div  id = " weblogo " >
  < HREF = " http://chris-a.rocks " > 
    chris-a.rocks
    </ A >
</ Div >
</ Html >
