<?php 

/*
Plugin Name: Ctrl+Enter Publishes Comments
Plugin URI: http://wordpress.org/plugins/ctrlenter-publishes-comments/
Description: Now you can publish your comments in your page with Ctrl/Cmd+Enter.
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BDUEBSM9QRPDU
Version: 0.2
Author: Rafa Poveda 
Author URI: http://raven.es/
License: GPL2
Contributors: bi0xid
*/

/*  
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


add_action('wp_head', 'ctrlenterpublishescomment');
 
function ctrlenterpublishescomment() { ?>
    <script>
        window.onload = function () {
            document.getElementById("commentform").onkeydown = function (e) {
                if (e.keyCode == 13 && e.ctrlKey) { // keyCode 13 is Enter
                    document.getElementById("submit").click(); // submit the form by hitting ctrl + enter
                    // alert(e.keyCode); // to know other keyCodes of each keys
                    return false; // preventing default action
                }
                if (e.keyCode == 13 && e.metaKey) { // keyCode 13 is Enter
                    document.getElementById("submit").click(); // submit the form by hitting cmd + enter
                    // alert(e.keyCode); // to know other keyCodes of each keys
                    return false; // preventing default action
                }
            }
        }
    </script>
<?php }
