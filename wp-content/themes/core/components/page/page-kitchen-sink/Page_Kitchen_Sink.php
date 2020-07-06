<?php
declare( strict_types=1 );

namespace Tribe\Project\Templates\Components\Page;

use Tribe\Project\Templates\Components\Component;

class Page_Kitchen_Sink extends Component {

	public const SUBHEADER = 'subheader';

	public function render(): void {
		?>
        {{ component( 'header/subheader/Subheader.php', subheader ) }}

		<div id="kitchen-sink" class="l-wrapper">

			<div class="s-sink t-sink">
				<h6>Color Palette</h6>
				<div class="site-grid">
					<div class="site-grid__wrapper">
						<div class="site-grid__layout site-grid__layout--2-col-sm site-grid__layout--4-col">
							<div class="site-grid__col">
								<div class="u-bc-black-midnight">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-grey-dark">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-grey-med">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-grey-light">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-gold">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-gold-light">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-cranberry">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-lime">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-orange">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-red">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-blue-light">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-blue">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-teal">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-purple">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-navy">&nbsp;</div>
							</div>
							<div class="site-grid__col">
								<div class="u-bc-mint">&nbsp;</div>
							</div>
						</div>
					</div>
				</div>
				<p></p>
				<h6>Paragraphs Intro</h6>
				<p class="p-intro">Nullam est lacus, molestie id rutrum ultrices, tincidunt ac leo.
					<del>Morbi consequat</del>
					tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis rhoncus. In
					hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur sed enim et
					viverra. Suspendisse dapibus mi eu velit sagittis, sit amet hendrerit nibh pretium. Curabitur sed
					facilisis ante.
				</p>
				<h6>Paragraphs</h6>
				<p>Nullam est lacus, molestie id <a href="http://tri.be">rutrum ultrices</a>, tincidunt ac leo.
					<del>Morbi consequat</del>
					tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis rhoncus. In
					hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur sed enim et
					viverra. Suspendisse dapibus mi eu velit sagittis, sit amet hendrerit nibh pretium. Curabitur sed
					facilisis ante.
				</p>
				<p>Morbi consequat tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien
					<mark>mollis rhoncus</mark>
					. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur sed
					enim et viverra. Suspendisse dapibus mi eu velit sagittis, sit amet hendrerit nibh pretium. Curabitur
					sed facilisis ante.
				</p>
				<h6>Anchors</h6>
				<p><a class="cta" href="#">Link Tag</a></p>
				<div style="background-color: #242121; margin-bottom: 30px; padding: 20px;"><a class="cta cta--inverse"
																																											 href="#">Link Tag</a></div>
				<p><a href="#">Aliquam blandit</a> et odio ut porttitor. Aenean a ipsum maximus dui scelerisque dictum. Sed
					tristique gravida dui, vel rutrum enim lacinia in. Pellentesque consectetur est urna, a venenatis nibh
					pretium a. Nullam est lacus, molestie id rutrum ultrices, tincidunt ac leo. Morbi consequat tempor est.
					Nullam rutrum sem ut gravida aliquam.</p>
				<h6>Separator</h6>
				<hr/>
				<h6>Buttons</h6>
				<p><a class="btn btn--lg" href="&quot;#">Button Primary</a><br/>
					<a class="btn btn--sm" href="&quot;#">Button Small</a><br/>
					<a class="btn btn--sm btn--grey" href="&quot;#">Button Grey</a></p>
				<hr/>
				<h6>Embeds</h6>
				<div class="c-video c-video--lazy" data-js="c-video" data-embed-id="0hELnks9eoU"
						 data-embed-provider="YouTube" data-id="">
					<div class="c-video__wrapper">
						<figure class="c-video__embed">
							<a href="https://www.youtube.com/watch?v=0hELnks9eoU" class="c-video__trigger"
								 data-js="c-video-trigger" title="Play Video" target="_blank" rel="noopener"><br>
								<img class="c-video__image lazyloaded"
										 src="https://i.ytimg.com/vi/0hELnks9eoU/maxresdefault.jpg"
										 data-src="https://i.ytimg.com/vi/0hELnks9eoU/maxresdefault.jpg" role="presentation">
								<figcaption class="c-video__caption">
									<i class="c-video__icon icon icon-play" aria-hidden=""></i><br>
									<span class="c-video__trigger-label">Symphony of Light – Kauai Timelapse 4K</span><br>
								</figcaption>
							</a><br>
						</figure>
					</div>
				</div>

				<hr/>
				<h1>H1: Headline two, become a leader in today’s fast-paced, global world</h1>
				<p>Morbi consequat tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis
					rhoncus. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur
					sed enim et viverra.</p>
				<h2>H2: Headline two, become a leader in today’s fast-paced, global world</h2>
				<p>Morbi consequat tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis
					rhoncus. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur
					sed enim et viverra.</p>
				<h3>H3: Headline three, become a leader in today’s fast-paced, global world</h3>
				<p>Morbi consequat tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis
					rhoncus. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur
					sed enim et viverra.</p>
				<h4>H4: Headline four, become a leader in today’s fast-paced, global world</h4>
				<p>Morbi consequat tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis
					rhoncus. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur
					sed enim et viverra.</p>
				<h5>H5: Headline five, become a leader in today’s fast-paced, global world</h5>
				<p>Morbi consequat tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis
					rhoncus. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur
					sed enim et viverra.</p>
				<h6>H6: Headline Six, become a leader in today’s fast-paced, global world</h6>
				<p>Morbi consequat tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis
					rhoncus. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur
					sed enim et viverra.</p>
				<hr/>
				<h6>Lists</h6>
				<p>Morbi consequat tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis
					rhoncus. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur
					sed enim et viverra.</p>
				<ul class="list-bullet">
					<li>Lorem ipsum dolor sit amet</li>
					<li>Aliquam eu elit in mi sagittis lacini</li>
					<li>Nam id odio nec dolor</li>
					<li>Mauris sit amet odio a nisl venenatis consectetur</li>
				</ul>
				<p>Morbi consequat tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis
					rhoncus.</p>
				<ol>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Aliquam eu elit in mi sagittis lacini</li>
					<li>Nam id odio nec dolor</li>
					<li>Mauris sit amet odio a nisl venenatis consectetur</li>
				</ol>
				<p>Morbi consequat tempor est. Nullam rutrum sem ut gravida aliquam. Aenean pharetra dolor non sapien mollis
					rhoncus. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur
					sed enim et viverra.</p>
				<dl class="ordered">
					<dt>Headline one</dt>
					<dd>Lorem ipsum dolor sit amet</dd>
					<dt>Headline two</dt>
					<dd>Aliquam eu elit in mi sagittis lacini</dd>
					<dt>Headline three</dt>
					<dd>Nam id odio nec dolor</dd>
				</dl>
				<hr/>
				<h6>Media</h6>
				<figure id="attachment_14" style="width: 1800px" class="wp-image wp-image--caption aligncenter"><img
							class="wp-image-14 size-full" src="/wp-content/plugins/core/assets/theme/img/demo/students.jpg"
							alt="" width="1800" height="1198"/>
					<figcaption class="wp-caption-text">This is a caption. Use this to add a description below the image.
					</figcaption>
				</figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu elit in mi sagittis lacinia. Nam id
					odio nec dolor cursus vulputate nec in urna. posuere vel mauris et aliquam. Ut feugiat non tellus at
					faucibus. Mauris sit amet odio a nisl venenatis consectetur vel ut lorem.</p>
				<figure id="attachment_15" style="width: 300px" class="wp-image wp-image--caption alignleft"><img
							class="wp-image-15 size-medium"
							src="/wp-content/plugins/core/assets/theme/img/demo/sunny.jpg" alt="" width="300"
							height="201"/>
					<figcaption class="wp-caption-text">This is a caption. Use this to describe the image.</figcaption>
				</figure>
				<p>Aliquam blandit et odio ut porttitor. Aenean a ipsum maximus dui scelerisque dictum. Sed tristique
					gravida dui, vel rutrum enim lacinia in. Pellentesque consectetur est urna, a venenatis nibh pretium a.
					Nullam est lacus, molestie id rutrum ultrices, tincidunt ac leo. Morbi consequat tempor est. Nullam
					rutrum sem ut gravida aliquam. Aenean pharetra hac habitasse platea dictumst. Etiam ullamcorper eget est
					vitae dictum. Integer consectetur sed enim et viverra.</p>
				<p>Dolor non sapien mollis rhoncus. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae
					dictum. Integer consectetur sed enim et viverra. velit sagittis, sit amet hendrerit nibh pretium.
					Curabitur sed facilisis ante. Duis consequat velit diam.</p>
				<figure class="wp-image wp-image--no-caption alignright"><img class="size-medium wp-image-13"
																																			src="/wp-content/plugins/core/assets/theme/img/demo/friends.jpg"
																																			alt="" width="300" height="200"/></figure>
				<p>Aliquam blandit et odio ut porttitor. Aenean a ipsum maximus dui scelerisque dictum. Sed tristique
					gravida dui, vel rutrum enim lacinia in. Pellentesque consectetur est urna, a venenatis nibh pretium a.
					Nullam est lacus, molestie id rutrum ultrices, tincidunt ac leo. Morbi consequat tempor est. Nullam
					rutrum sem ut gravida aliquam. ullamcorper eget est vitae dictum. Integer consectetur sed enim et
					viverra. velit sagittis, sit amet hendrerit nibh pretium. Curabitur sed facilisis ante. Duis consequat
					velit diam. In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer
					consectetur sed enim et viverra. Suspendisse dapibus mi eu velit sagittis, sit amet hendrerit nibh
					pretium. Curabitur sed facilisis ante. Integer consectetur sed enim et viverra. Suspendisse dapibus mi
					eu velit sagittis, sit amet hendrerit nibh pretium. Curabitur sed facilisis ante. Integer consectetur
					sed enim et viverra. Suspendisse dapibus mi eu velit sagittis, sit amet hendrerit nibh pretium.
					Curabitur sed facilisis ante.</p>
				<hr/>
				<h6>Quotes</h6>
				<p>In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur sed enim
					et viverra. Suspendisse dapibus mi eu velit sagittis, sit amet hendrerit nibh pretium. Curabitur sed
					facilisis ante.</p>
				<blockquote><p>&#8220;One must still have chaos in oneself to be able to give birth to a dancing star.&#8221;<cite>Friedrich
							Nietzsche, Thus Spoke Zarathustra<br/>
						</cite></p></blockquote>
				<p>In hac habitasse platea dictumst. Etiam ullamcorper eget est vitae dictum. Integer consectetur sed enim
					et viverra. Suspendisse dapibus mi eu velit sagittis, sit amet hendrerit nibh pretium. Curabitur sed
					facilisis ante.</p>
				<blockquote class="blockquote--secondary"><p>I took a deep breath and listened to the old bray of my heart.
						I am. I am. I am.<cite>Sylvia Plath, The Bell Jar<br/>
						</cite></p></blockquote>
				<hr/>
				<h6>Tables</h6>
				<table>
					<thead>
					<tr>
						<th>Table Heading One</th>
						<th>Table Heading Two</th>
						<th>Table Heading Three</th>
					</tr>
					</thead>
					<thead>
					<tr>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu elit in mi.</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu elit in mi.</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu elit in mi.</td>
					</tr>
					<tr>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu elit in mi.</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu elit in mi.</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu elit in mi.</td>
					</tr>
					</thead>
				</table>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>

			</div>

		</div>
		<?php
	}

}
