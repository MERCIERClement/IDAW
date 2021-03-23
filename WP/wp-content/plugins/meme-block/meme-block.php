<?php
/**
 * Plugin Name:     Meme Block
 * Description:     Generate your meme and be awesome
 * Version:         1.0.2
 * Author:          Cristian Ungureanu
 * Author URI:        https://themeisle.com
 * License:         GPL-3.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:     meme-block
 *
 * @package         meme-block
 */


function get_memes() {
	
	return array(
		array( 'value' => "181913649", 'label' => "Drake Hotline Bling", 'url' => "https://i.imgflip.com/30b1gx.jpg", ),
		array( 'value' => "112126428", 'label' => "Distracted Boyfriend", 'url' => "https://i.imgflip.com/1ur9b0.jpg", ),
		array( 'value' => "87743020", 'label' => "Two Buttons", 'url' => "https://i.imgflip.com/1g8my4.jpg", ),
		array( 'value' => "129242436", 'label' => "Change My Mind", 'url' => "https://i.imgflip.com/24y43o.jpg", ),
		array( 'value' => "131087935", 'label' => "Running Away Balloon", 'url' => "https://i.imgflip.com/261o3j.jpg", ),
		array( 'value' => "217743513", 'label' => "UNO Draw 25 Cards", 'url' => "https://i.imgflip.com/3lmzyx.jpg", ),
		array( 'value' => "124822590", 'label' => "Left Exit 12 Off Ramp", 'url' => "https://i.imgflip.com/22bdq6.jpg", ),
		array( 'value' => "102156234", 'label' => "Mocking Spongebob", 'url' => "https://i.imgflip.com/1otk96.jpg", ),
		array( 'value' => "438680", 'label' => "Batman Slapping Robin", 'url' => "https://i.imgflip.com/9ehk.jpg", ),
		array( 'value' => "93895088", 'label' => "Expanding Brain", 'url' => "https://i.imgflip.com/1jwhww.jpg", ),
		array( 'value' => "148909805", 'label' => "Monkey Puppet", 'url' => "https://i.imgflip.com/2gnnjh.jpg", ),
		array( 'value' => "222403160", 'label' => "Bernie I Am Once Again Asking For Your Support", 'url' => "https://i.imgflip.com/3oevdk.jpg",),
		array( 'value' => "235589", 'label' => "Evil Toddler", 'url' => "https://i.imgflip.com/51s5.jpg", ),
		array( 'value' => "188390779", 'label' => "Woman Yelling At Cat", 'url' => "https://i.imgflip.com/345v97.jpg", ),
		array( 'value' => "1035805",'label' => "Boardroom Meeting Suggestion", 'url' => "https://i.imgflip.com/m78d.jpg", ),
		array( 'value' => "4087833", 'label' => "Waiting Skeleton", 'url' => "https://i.imgflip.com/2fm6x.jpg", ),
		array( 'value' => "119139145", 'label' => "Blank Nut Button", 'url' => "https://i.imgflip.com/1yxkcp.jpg", ),
		array( 'value' => "100777631", 'label' => "Is This A Pigeon", 'url' => "https://i.imgflip.com/1o00in.jpg", ),
		array( 'value' => "135256802", 'label' => "Epic Handshake", 'url' => "https://i.imgflip.com/28j0te.jpg", ),
		array( 'value' => "226297822", 'label' => "Panik Kalm Panik", 'url' => "https://i.imgflip.com/3qqcim.png", ),
		array( 'value' => "178591752", 'label' => "Tuxedo Winnie The Pooh", 'url' => "https://i.imgflip.com/2ybua0.png", ),
		array( 'value' => "114585149", 'label' => "Inhaling Seagull", 'url' => "https://i.imgflip.com/1w7ygt.jpg", ),
		array( 'value' => "97984", 'label' => "Disaster Girl", 'url' => "https://i.imgflip.com/23ls.jpg", ),
		array( 'value' => "155067746", 'label' => "Surprised Pikachu", 'url' => "https://i.imgflip.com/2kbn1e.jpg", ),
		array( 'value' => "80707627", 'label' => "Sad Pablo Escobar", 'url' => "https://i.imgflip.com/1c1uej.jpg", ),
		array( 'value' => "91538330", 'label' => "X, X Everywhere", 'url' => "https://i.imgflip.com/1ihzfe.jpg", ),
		array( 'value' => "27813981", 'label' => "Hide the Pain Harold", 'url' => "https://i.imgflip.com/gk5el.jpg", ),
		array( 'value' => "123999232", 'label' => "The Scroll Of Truth", 'url' => "https://i.imgflip.com/21tqf4.jpg", ),
		array( 'value' => "89370399", 'label' => "Roll Safe Think About It", 'url' => "https://i.imgflip.com/1h7in3.jpg", ),
		array( 'value' => "101470", 'label' => "Ancient Aliens", 'url' => "https://i.imgflip.com/26am.jpg", ),
		array( 'value' => "134797956", 'label' => "American Chopper Argument", 'url' => "https://i.imgflip.com/2896ro.jpg", ),
		array( 'value' => "61579", 'label' => "One Does Not Simply", 'url' => "https://i.imgflip.com/1bij.jpg", ),
		array( 'value' => "175540452", 'label' => "Unsettled Tom", 'url' => "https://i.imgflip.com/2wifvo.jpg", ),
		array( 'value' => "91545132", 'label' => "Trump Bill Signing", 'url' => "https://i.imgflip.com/1ii4oc.jpg", ),
		array( 'value' => "135678846", 'label' => "Who Killed Hannibal", 'url' => "https://i.imgflip.com/28s2gu.jpg", ),
		array( 'value' => "180190441",'label' => "They're The Same Picture",'url' => "https://i.imgflip.com/2za3u1.jpg",),
		array( 'value' => "21735", 'label' => "The Rock Driving", 'url' => "https://i.imgflip.com/grr.jpg", ),
		array( 'value' => "124055727",'label' => "Y'all Got Any More Of That",'url' => "https://i.imgflip.com/21uy0f.jpg",),
		array( 'value' => "196652226",'label' => "Spongebob Ight Imma Head Out",'url' => "https://i.imgflip.com/392xtu.jpg",),
		array( 'value' => "6235864", 'label' => "Finding Neverland", 'url' => "https://i.imgflip.com/3pnmg.jpg", ),
		array( 'value' => "28251713", 'label' => "Oprah You Get A", 'url' => "https://i.imgflip.com/gtj5t.jpg", ),
		array( 'value' => "132769734", 'label' => "Hard To Swallow Pills", 'url' => "https://i.imgflip.com/271ps6.jpg", ),
		array( 'value' => "61520", 'label' => "Futurama Fry", 'url' => "https://i.imgflip.com/1bgw.jpg", ),
		array( 'value' => "161865971", 'label' => "Marked Safe From", 'url' => "https://i.imgflip.com/2odckz.jpg", ),
		array( 'value' => "3218037",'label' => "This Is Where I'd Put My Trophy If I Had One",'url' => "https://i.imgflip.com/1wz1x.jpg",),
		array( 'value' => "101288", 'label' => "Third World Skeptical Kid", 'url' => "https://i.imgflip.com/265k.jpg", ),
		array( 'value' => "14371066", 'label' => "Star Wars Yoda", 'url' => "https://i.imgflip.com/8k0sa.jpg", ),
		array( 'value' => "8072285", 'label' => "Doge", 'url' => "https://i.imgflip.com/4t0m5.jpg", ),
		array( 'value' => "5496396", 'label' => "Leonardo Dicaprio Cheers", 'url' => "https://i.imgflip.com/39t1o.jpg", ),
		array( 'value' => "84341851", 'label' => "Evil Kermit", 'url' => "https://i.imgflip.com/1e7ql7.jpg", ),
		array( 'value' => "61532", 'label' => "The Most Interesting Man In The World", 'url' => "https://i.imgflip.com/1bh8.jpg", ),
		array( 'value' => "61556", 'label' => "Grandma Finds The Internet", 'url' => "https://i.imgflip.com/1bhw.jpg", ),
		array( 'value' => "101287", 'label' => "Third World Success Kid", 'url' => "https://i.imgflip.com/265j.jpg", ),
		array( 'value' => "101511", 'label' => "Don't You Squidward", 'url' => "https://i.imgflip.com/26br.jpg", ),
		array( 'value' => "61539", 'label' => "First World Problems", 'url' => "https://i.imgflip.com/1bhf.jpg", ),
		array( 'value' => "563423", 'label' => "That Would Be Great", 'url' => "https://i.imgflip.com/c2qn.jpg", ),
		array( 'value' => "16464531", 'label' => "But That's None Of My Business", 'url' => "https://i.imgflip.com/9sw43.jpg", ),
		array( 'value' => "61527", 'label' => "Y U No", 'url' => "https://i.imgflip.com/1bh3.jpg", ),
		array( 'value' => "922147", 'label' => "Laughing Men In Suits", 'url' => "https://i.imgflip.com/jrj7.jpg", ),
		array( 'value' => "101910402", 'label' => "Who Would Win?", 'url' => "https://i.imgflip.com/1ooaki.jpg", ),
		array( 'value' => "99683372", 'label' => "Sleeping Shaq", 'url' => "https://i.imgflip.com/1nck6k.jpg", ),
		array( 'value' => "55311130", 'label' => "This Is Fine", 'url' => "https://i.imgflip.com/wxica.jpg", ),
		array( 'value' => "460541", 'label' => "Jack Sparrow Being Chased", 'url' => "https://i.imgflip.com/9vct.jpg", ),
		array( 'value' => "163573", 'label' => "Imagination Spongebob", 'url' => "https://i.imgflip.com/3i7p.jpg", ),
		array( 'value' => "61546", 'label' => "Brace Yourselves X is Coming", 'url' => "https://i.imgflip.com/1bhm.jpg", ),
		array( 'value' => "4173692", 'label' => "Scared Cat", 'url' => "https://i.imgflip.com/2hgfw.jpg", ),
		array( 'value' => "6531067", 'label' => "See Nobody Cares", 'url' => "https://i.imgflip.com/3vzej.jpg", ),
		array( 'value' => "61585", 'label' => "Bad Luck Brian", 'url' => "https://i.imgflip.com/1bip.jpg", ),
		array( 'value' => "27920", 'label' => "Surprised Koala", 'url' => "https://i.imgflip.com/ljk.jpg", ),
		array( 'value' => "285870", 'label' => "Squidward", 'url' => "https://i.imgflip.com/64ku.jpg", ),
		array( 'value' => "61582", 'label' => "Creepy Condescending Wonka", 'url' => "https://i.imgflip.com/1bim.jpg", ),
		array( 'value' => "157978092", 'label' => "Presidential Alert", 'url' => "https://i.imgflip.com/2m20oc.jpg", ),
		array( 'value' => "61533", 'label' => "X All The Y", 'url' => "https://i.imgflip.com/1bh9.jpg", ),
		array( 'value' => "61544", 'label' => "Success Kid", 'url' => "https://i.imgflip.com/1bhk.jpg", ),
		array( 'value' => "53764", 'label' => "Peter Parker Cry", 'url' => "https://i.imgflip.com/15hg.jpg", ),
		array( 'value' => "14230520", 'label' => "Black Girl Wat", 'url' => "https://i.imgflip.com/8h0c8.jpg", ),
		array( 'value' => "29617627", 'label' => "Look At Me", 'url' => "https://i.imgflip.com/hmt3v.jpg", ),
		array( 'value' => "405658", 'label' => "Grumpy Cat", 'url' => "https://i.imgflip.com/8p0a.jpg", ),
		array( 'value' => "71428573", 'label' => "Say it Again, Dexter", 'url' => "https://i.imgflip.com/16iyn1.jpg", ),
		array( 'value' => "170715647", 'label' => "Well Yes, But Actually No", 'url' => "https://i.imgflip.com/2tn11b.jpg", ),
		array( 'value' => "109765", 'label' => "I'll Just Wait Here", 'url' => "https://i.imgflip.com/2cp1.jpg", ),
		array( 'value' => "444501", 'label' => "Maury Lie Detector", 'url' => "https://i.imgflip.com/9iz9.jpg", ),
		array( 'value' => "28034788", 'label' => "Marvel Civil War 1", 'url' => "https://i.imgflip.com/govs4.jpg", ),
		array( 'value' => "40945639", 'label' => "Dr Evil Laser", 'url' => "https://i.imgflip.com/odluv.jpg", ),
		array( 'value' => "89655", 'label' => "Uncle Sam", 'url' => "https://i.imgflip.com/1x6f.jpg", ),
		array( 'value' => "21604248", 'label' => "Mugatu So Hot Right Now", 'url' => "https://i.imgflip.com/cv1y0.jpg", ),
		array( 'value' => "61581", 'label' => "Put It Somewhere Else Patrick", 'url' => "https://i.imgflip.com/1bil.jpg", ),
		array( 'value' => "61580", 'label' => "Too Damn High", 'url' => "https://i.imgflip.com/1bik.jpg", ),
		array( 'value' => "101716", 'label' => "Yo Dawg Heard You", 'url' => "https://i.imgflip.com/26hg.jpg", ),
		array( 'value' => "1202623", 'label' => "Keep Calm And Carry On Red", 'url' => "https://i.imgflip.com/pry7.jpg", ),
		array( 'value' => "9440985", 'label' => "Face You Make Robert Downey Jr", 'url' => "https://i.imgflip.com/5mcpl.jpg", ),
		array( 'value' => "195389", 'label' => "Sparta Leonidas", 'url' => "https://i.imgflip.com/46rh.jpg", ),
		array( 'value' => "100947", 'label' => "Matrix Morpheus", 'url' => "https://i.imgflip.com/25w3.jpg", ),
		array( 'value' => "184801100", 'label' => "Me And The Boys", 'url' => "https://i.imgflip.com/320xfw.jpg", ),
		array( 'value' => "371382", 'label' => "Simba Shadowy Place", 'url' => "https://i.imgflip.com/7yk6.jpg", ),
		array( 'value' => "1367068", 'label' => "I Should Buy A Boat Cat", 'url' => "https://i.imgflip.com/tau4.jpg", ),
		array( 'value' => "259680", 'label' => "Am I The Only One Around Here", 'url' => "https://i.imgflip.com/5kdc.jpg", ),
		array( 'value' => "61516", 'label' => "Philosoraptor", 'url' => "https://i.imgflip.com/1bgs.jpg", ),
		array( 'value' => "142921050", 'label' => "Car Salesman Slaps Roof Of Car", 'url' => "https://i.imgflip.com/2d3al6.jpg", ),
		array( 'value' => "29562797", 'label' => "I'm The Captain Now", 'url' => "https://i.imgflip.com/hlmst.jpg", ),
	);
}

/**
 * Registers all block assets so that they can be enqueued through the block editor
 * in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function init_meme_block() {
	
	// automatically load dependencies and version
	$asset_file = include( plugin_dir_path( __FILE__ ) . 'inc/build/index.asset.php' );
	
	wp_register_script(
		'meme-block-script',
		plugins_url( 'inc/build/meme-block.js', __FILE__ ),
		$asset_file['dependencies'],
		$asset_file['version']
	);
	
	$memes = get_memes();
	wp_localize_script(
		'meme-block-script',
		'memeData',
		$memes
	);
	
	wp_register_style(
		'meme-block-editor-style',
		plugins_url( 'inc/src/css/editor.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'inc/src/css/editor.css' )
	);
	
	wp_register_style(
		'meme-block-style',
		plugins_url( 'inc/src/css/style.css', __FILE__ ),
		array( ),
		filemtime( plugin_dir_path( __FILE__ ) . 'inc/src/css/style.css' )
	);
	
	register_block_type( 'meme-block/meme-block',
		array(
			'editor_script' => 'meme-block-script',
			'editor_style'  => 'meme-block-editor-style',
			'style'         => 'meme-block-style',
		)
	);
}

add_action( 'init', 'init_meme_block' );
