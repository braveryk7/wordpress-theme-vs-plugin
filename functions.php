<?php

function calcProcessTime() {
	// ログインしているユーザーにのみ実行されるよう判定
	if ( is_user_logged_in() ) {
		// 開始時刻の取得
		$start = microtime( true );
		
		// 値が0の変数を用意
		$num = 0;
		
		// +1を10億回繰り返し
		for ( $i = 0; $i < 1000000000; $i++ ){
			$num++;
		}
		
		// 開始と現在の時間差（＝処理にかかった時間）を求める
		$time = ( microtime( true ) - $start );
		
		// console.logに結果を出力
		echo '<script>console.log(' . json_encode( round( $time, 3 ) ) . ');</script>';
	}
}

add_action( 'init', 'calcProcessTime' );