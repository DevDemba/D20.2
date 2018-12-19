<?php

declare(strict_types=1);

namespace Support\Entity\Connect4;

final class Grid
{
	private $game_board_rows;
	private $game_boar
	private $game_current_player; 
	private $game_moves; 
			
public function __construct() 
{
	$this->game_board_array = array(); 
	$this->game_board_rows = 6;
	$this->game_board_columns = 7;
	$this->players = array("x","o");
	$this->game_current_player = $this->players[rand(0,1)]; 
	$this->game_moves = 0;
	
	for($i = 0; $i < $this->game_board_rows ; $i ++ ){
		
				$this->game_board_array[$i] = array();
				
				for($j = 0; $j < $this->game_board_columns ; $j ++ ){
					$this->game_board_array[$i][$j] = "*"; 
				
				}
		
	}
	

	$this->game_next_move();
}


private function game_next_move()
{
		
	
		
		if( $this->game_moves >= ( $this->game_board_rows * $this->game_board_columns )) {
			echo 'No winner. All slots filled';
			return false; 
		}
		
		
		$col = rand(0, $this->game_board_columns - 1 ); 
		
		for( $row = $this->game_board_rows - 1; $row >= 0 ; $row-- ){ 
			
		
			if( $this->game_board_array[$row][$col] === "*" ){
				
				$this->game_board_array[$row][$col] = $this->game_current_player; 
				
				$this->game_moves++; 
				
				$this->print_game_board(); 
				
				
				if( $this->game_check_win($row, $col) ){ 
					
					echo '<br/>Player ' . $this->game_current_player.' wins!!';					
					return false; 
					
				}else{
					
				
					
					if ($this->game_current_player == "x") {
						
						$this->game_current_player = $this->players[1]; 
						
					}else {
						
						$this->game_current_player = $this->players[0]; 
						
					}
					
				
					$this->game_next_move();
					
				}
				
				return false; 
			} 
			
		}
		

		$this->game_next_move();
		
}
	
private function game_check_win($row, $col)
{
	

	$player = $this->game_board_array[$row][$col];
	
	$horizontal_count = 0;
		

		for ( $i = $col; $i >= 0; $i-- )
		{
			
			if( $this->game_board_array[$row][$i] != $player ){
				
				break;
				
			}
			
			$horizontal_count++;
			
		}
		
		for ( $i = $col + 1; $i < $this->game_board_columns; $i++ )
		{
				
			if( $this->game_board_array[$row][$i] != $player ){
		
				break;
		
			}
				
			$horizontal_count++;
				
		}
		

		if ($horizontal_count >= 4) {
			
			$horizontal_win = true; 
			
		}else {
			
			$horizontal_win = false; 
		}
		
		
	
		$vertical_win = false;
		
		
		$vertical_count = 0;

			for ( $i = $row; $i >= 0; $i-- )
			{
				
				if( $this->game_board_array[$i][$col] != $player ){
					
					break;
					
				}
				
				$vertical_count++;
				
			}
			

			for ( $i = $row + 1; $i < $this->game_board_rows; $i++ )
			{
					
				if( $this->game_board_array[$i][$col] != $player ){
			
					break;
			
				}
					
				$vertical_count++;
					
			}

			if ($vertical_count >= 4) {
				
				$vertical_win = true; 
				
			}else {
				
				$vertical_win = false; 
			}
		
		


		$diagonal_win = false;
		
		$diagonal_count = 0;
		
		$tmp_row = $row; 
		$tmp_col = $col; 
		

			for ( $i = $tmp_row; $i >= 0; $i-- )
			{
				
				if ($tmp_col >= $this->game_board_columns) break; 
				
				if( $this->game_board_array[$i][$tmp_col] != $player ){
					
					break;
					
				}
				
				$tmp_col++;
				$diagonal_count++;
				
			}
			
	
			for ( $i = $tmp_row + 1; $i < $this->game_board_rows; $i++ )
			{
				
				if ($tmp_col >= $this->game_board_columns) break;
				
				if( $this->game_board_array[$i][$tmp_col] != $player ){
			
					break;
			
				}
					
				$tmp_col++;
				$diagonal_count++;
					
			}
			
	
			if ($diagonal_count >= 4) {
				
				$diagonal_win = true; 
				
			}else {
				
				$diagonal_win = false; 
			}
			
	
		
		if( $horizontal_win) {
			
			echo "<br/>Horizontal Win";
			return true;
			
		} else if($vertical_win){
			
			echo "<br/>Vertical Win";
			return true;
			
			
		} else if ($diagonal_win){
		
			echo "<br/>Diagonal Win";
			return true;
		}else {
		
			return false;
		
		}
	
	}
}	
 
$runGame = new Connect4();
?>