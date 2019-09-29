<?php

//ボード
Class Board{
  private $board_name; 
  private $board_color;
  private $line_color;

  public function __construct($name, $bcolor = '#AAAAAA', $lcolor = '#AAAAAA')
  {
    $this->setBoardName($name);
    $this->setBoardColor($bcolor);
    $this->setLineColor($lcolor);
  }

  public function setBoardName($name){
    $this->board_name = $name;
  }
  public function setBoardColor($color){
    $this->board_color = $color;
  }
  public function setLineColor($color){
    $this->line_color = $color;
  }
  public function getBoardName(){
    return $this->board_name;
  }
  public function getBoardColor(){
    return $this->board_color;
  }
  public function getLineColor(){
    return $this->line_color;
  }

  public function createBoard(){
    echo '<table class="p-board-table" value="play">';
    echo '  <tr style="border-left-style: hidden; border-top-style: hidden; border-right-style: hidden;">';
    echo '  <td class="js-click-square"><data class=""></data><i class=""></i></td>';
    echo '  <td class="js-click-square"><data class=""></data><i class=""></i></td>';
    echo '  <td class="js-click-square"><data class=""></data><i class=""></i></td>';
    echo '</tr>';
    echo '<tr style="border-left-style: hidden; border-right-style: hidden;">';
    echo '  <td class="js-click-square"><data class=""></data><i class=""></i></td>';
    echo '  <td class="js-click-square"><data class=""></data><i class=""></i></td>';
    echo '  <td class="js-click-square"><data class=""></data><i class=""></i></td>';
    echo '</tr>';
    echo '<tr style="border-left-style: hidden; border-bottom-style: hidden; border-right-style: hidden;">';
    echo '  <td class="js-click-square"><data class=""></data><i class=""></i></td>';
    echo '  <td class="js-click-square"><data class=""></data><i class=""></i></td>';
    echo '  <td class="js-click-square"><data class=""></data><i class=""></i></td>';
    echo '</tr>';
    echo '</table>';
  }
}

//アイコン
abstract class Icon{
  protected $icon;
  protected $icon_name;
  protected $icon_color;
  protected $icon_size;

  public function __construct($icon, $name, $color = '#AAAAAA', $size = 'fa-5x')
  {
    $this->setIcon($icon);
    $this->setIconName($name);
    $this->setIconColor($color);
    $this->setIconSize($size);
  }

  public function setIcon($icon){
    $this->icon = $icon;
  }
  public function setIconName($name){
    $this->icon_name = $name;
  }
  public function setIconColor($color){
    $this->icon_color = $color;
  }
  public function setIconSize($size){
    $this->icon_size = $size;
  }
  public function getIcon(){
    return $this->icon;
  }
  public function getIconName(){
    return $this->icon_name;
  }
  public function getIconColor(){
    return $this->icon_color;
  }
  public function getIconSize(){
    return $this->icon_size;
  }

  //勝利の舞
  abstract public function victoryDance();
}

//勝利時に点滅するアイコン
Class FlashIcon extends Icon{
  public function victoryDance()
  {
    //点滅させるcss
    return 'flash';
  }
}
//勝利時に回転するアイコン
Class RotateIcon extends Icon{
  public function victoryDance()
  {
    //回転するcss
    return 'rotate';
  }
}

?>