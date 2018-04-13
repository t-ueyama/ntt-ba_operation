/*
* コスト計算
*/

function deliv_clear()
{
  var deliv_obj     = document.simulate.deliv;
  var hub_obj       = document.simulate.hub;

  deliv_obj[0].checked = false;
  deliv_obj[1].checked = false;
  hub_obj.value = "";
}

function deliv_check( obj )
{
  var guidebook_obj = document.simulate.guidebook;

  if( !check_radio( guidebook_obj ) ){
    return;
  }
  var guidebook = get_radio_value( guidebook_obj );

  if( guidebook == 2 ){
    obj.checked = false;
    alert( "冊子が不要の場合には選択できません" );
  }
}

function cost_sim()
{
  var course_obj    = document.simulate.course;
  var num_obj       = document.simulate.num;
  var guidebook_obj = document.simulate.guidebook;
  var deliv_obj     = document.simulate.deliv;
  var hub_obj       = document.simulate.hub;

  if( !check_radio( course_obj ) ){
    alert( "コースを選んでください" );
    return;
  }
  var course    = Number( get_radio_value( course_obj ) );

  if( num_obj.value == '' ){
    alert( "対象となる人数を入力してください" );
    return;
  }
  else {
    if( num_obj.value.match(/[^0-9]+/) ){
      alert( "対象となる人数は半角数字で入力してください" );
      return;
    }
    else {
      if( num_obj.value <= 0 ){
        alert( "対象となる人数は1以上で入力してください" );
        return;
      }
    }
  }
  var num       = num_obj.value;

  if( !check_radio( guidebook_obj ) ){
    alert( "ガイドブックなどの冊子は必要か選んでください" );
    return;
  }
  var guidebook = get_radio_value( guidebook_obj );

  if( guidebook == 1 ){
    if( !check_radio( deliv_obj ) ){
      alert( "配送先を選んでください" );
      return;
    }
    else {
      if( get_radio_value( deliv_obj ) == 2 ){
        if( hub_obj.value == '' ){
          alert( "配送先の拠点数を入力してください" );
          return;
        }
        else {
          if( hub_obj.value.match(/[^0-9]+/) ){
            alert( "配送先の拠点数は半角数字で入力してください" );
            return;
          }
          else {
            if( hub_obj.value <= 0 ){
              alert( "配送先の拠点数は1以上で入力してください" );
              return;
            }
          }
        }
      }
    }

    var deliv     = get_radio_value( deliv_obj );
    var hub       = ( deliv <= 1 )? 1 : hub_obj.value;
  }
  else {
    var deliv     = 0;
    var hub       = 1;
  }

  var base = course + ((guidebook == 1)? 0 : -50) + ((deliv == 1)? 150 : 0);

  var month_total = (base * num) + ((hub-1) * 1000);
  var year_total = month_total * 12;

  document.simulate.month_total.value = insertComma( month_total );
  document.simulate.year_total.value = insertComma( year_total );
}

function check_radio( radio_obj )
{
  var checked = false;

  for( i = 0 ; i < radio_obj.length ; i++ ){
    if( radio_obj[i].checked )
      checked = true;
  }

  return checked;
}

function get_radio_value( radio_obj )
{
  var val = 0;

  for( i = 0 ; i < radio_obj.length ; i++ ){
    if( radio_obj[i].checked )
      val = radio_obj[i].value;
  }

  return val;
}

function insertComma( str ){
  var destStr = String( str );
  var tmpStr = "";

  while (destStr != (tmpStr = destStr.replace(/^([+-]?\d+)(\d\d\d)/,"$1,$2"))) {
    destStr = tmpStr;
  }

  return destStr;
}
