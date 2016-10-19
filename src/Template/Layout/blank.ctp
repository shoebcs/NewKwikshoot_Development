<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?pph echo $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    </title>
    <?php echo $this->Html->css('cake.css') ?>
    <style>
div.message {
    text-align: center;
    cursor: pointer;
    display: block;
    font-weight: normal;
    padding: 0 1.5rem 0 1.5rem;
    transition: height 300ms ease-out 0s;
    background-color: #a0d3e8;
    color: #626262;
    top: 15px;
    right: 15px;
    z-index: 999;
    overflow: hidden;
    height: 50px;
    line-height: 2.5em;
}
.error-message{color:red;}
        </style>
 </head>
<body>
    <?php echo  $this->Flash->render() ?>
    <div class="container clearfix">
        <?php echo $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
