<?php
/*
  Easy Pie Coming Soon Plugin
  Copyright (C) 2014, Synthetic Thought LLC
  website: easypiewp.com contact: bob@easypiewp.com

  Easy Pie Coming Soon Plugin is distributed under the GNU General Public License, Version 3,
  June 2007. Copyright (C) 2007 Free Software Foundation, Inc., 51 Franklin
  St, Fifth Floor, Boston, MA 02110, USA

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
  ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
  WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
  DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
  ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
  (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
  LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
  ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
  SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
$relative_page_path = '/mini-themes/base-responsive/index.php';

$__dir__ = dirname(__FILE__);

$page_url = get_site_url() . '?ezp_cs_preview=true'

//header( "Location: $page_url" ) ;

?>
<h2>Easy Pie Coming Soon: <?php EZP_CS_Utility::_e('Preview') ?></h2>
<iframe style="margin-top:20px; margin-left: 15px; width:80%; height: 600px" src="<?php echo $page_url; ?>"/>
    