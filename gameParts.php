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
    echo '<table>';
    echo '  <tr style="border-left-style: hidden; border-top-style: hidden; border-right-style: hidden;">';
    echo '  <td><i class="far fa-circle fa-5x icon-color"></i></td>';
    echo '  <td><i class="fas fa-times fa-5x icon-color"></i></i></td>';
    echo '  <td><i class="far fa-circle fa-5x icon-color"></a></td>';
    echo '</tr>';
    echo '<tr style="border-left-style: hidden; border-right-style: hidden;">';
    echo '  <td><i class="fas fa-dog fa-5x icon-color"></i></i></td>';
    echo '  <td><i class="fas fa-cat fa-5x icon-color"></i></i></td>';
    echo '  <td><i class="fas fa-dog fa-5x icon-color"></td>';
    echo '</tr>';
    echo '<tr style="border-left-style: hidden; border-bottom-style: hidden; border-right-style: hidden;">';
    echo '  <td><i class="fas fa-burn fa-5x icon-color"></i></td>';
    echo '  <td><i class="fas fa-bomb fa-5x icon-color"></i></td>';
    echo '  <td><i class="fas fa-burn fa-5x icon-color"></td>';
    echo '</tr>';
    echo '</table>';
  }
}

//アイコン
abstract class Icon{
  protected $icon;
  protected $icon_color;

  public function __construct($icon, $color)
  {
    $this->setIcon($icon);
    $this->setIconColor($color);
  }

  public function setIcon($icon){
    $this->icon = $icon;
  }
  public function setIconColor($color){
    $this->icon_color = $color;
  }
  public function getIcon(){
    return $this->icon;
  }
  public function getIconColor(){
    return $this->icon_color;
  }

  //勝利の舞
  abstract public function victoryDance();
}

//勝利時に点滅するアイコン
Class FlashIcon extends Icon{
  public function victoryDance()
  {
    //アイコンを点滅させる
  }
}
//勝利時に回転するアイコン
Class RotateIcon extends Icon{
  public function victoryDance()
  {
    //アイコンを点滅させる
  }
}

?>