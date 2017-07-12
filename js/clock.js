Окно . Onload  =  function () {

Var date =  new  Date (),
    Год =  дата . GetFullYear (),
    Месяц =  дата . GetMonth (),
    День =  дата . GetUTCDate (),
    месяцы = [ « Ян » , « Февраль » , « Мары » , « Апрель » , « Май » , « Июнь » , « Июль » , « Август » , « Сентябрь » , « Октябрь » , « Ноябрь » , « Декабрь » ];

Документ . getElementById ( ' daymonth ' ). InnerHTML  = месяцы [месяц] +  "  "  + день;
Документ . GetElementById ( ' год ' ). InnerHTML  = год;

вар clockH =  $ ( " .hours " );
вар clockM =  $ ( " .minutes " );

Function  time () {     
  Var d =  new  Date (),
      S =  d . GetSeconds () *  6 ,
      M =  d . GetMinutes () *  6  + (s /  60 ),
      H =  d . getHours () %  12  /  12  *  360  + (м /  12 );  
    ЧасыH . Css ( " transform " , " rotate ( " + h + " deg) " );
    ЧасыM . Css ( " transform " , " rotate ( " + m + " deg) " );  
}

Var clock =  setInterval (время, 1000 );
Time ();

}