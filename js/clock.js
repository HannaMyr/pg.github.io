���� . Onload  =  function () {

Var date =  new  Date (),
    ��� =  ���� . GetFullYear (),
    ����� =  ���� . GetMonth (),
    ���� =  ���� . GetUTCDate (),
    ������ = [ � �� � , � ������� � , � ���� � , � ������ � , � ��� � , � ���� � , � ���� � , � ������ � , � �������� � , � ������� � , � ������ � , � ������� � ];

�������� . getElementById ( ' daymonth ' ). InnerHTML  = ������ [�����] +  "  "  + ����;
�������� . GetElementById ( ' ��� ' ). InnerHTML  = ���;

��� clockH =  $ ( " .hours " );
��� clockM =  $ ( " .minutes " );

Function  time () {     
  Var d =  new  Date (),
      S =  d . GetSeconds () *  6 ,
      M =  d . GetMinutes () *  6  + (s /  60 ),
      H =  d . getHours () %  12  /  12  *  360  + (� /  12 );  
    ����H . Css ( " transform " , " rotate ( " + h + " deg) " );
    ����M . Css ( " transform " , " rotate ( " + m + " deg) " );  
}

Var clock =  setInterval (�����, 1000 );
Time ();

}