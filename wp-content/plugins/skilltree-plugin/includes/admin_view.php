<div class="ltIE9-hide">
	<div class="page open">
		<div class="talent-tree">
				<!--ko foreach: skills-->
			<!--ko if: hasDependencies-->
			<div data-bind="css: { 'can-add-points': canAddPoints, 'has-points': hasPoints, 'has-max-points': hasMaxPoints }, attr: { 'data-skill-id': id }" class="skill">
				<div data-bind="css: { active: dependenciesFulfilled }" class="skill-dependency"></div>
			</div>
			<!--/ko-->
			<!--/ko-->
			<!--ko foreach: skills-->
			<div data-bind="css: { 'can-add-points': canAddPoints, 'has-points': hasPoints, 'has-max-points': hasMaxPoints }, attr: { 'data-skill-id': id }" class="skill">
				<div class="icon-container">
					<div class="icon"></div>
				</div>
				<div class="frame">
					<div class="tool-tip">
						<h3 data-bind="text: title" class="skill-name"></h3>
						<div data-bind="text: helpMessage" class="help-message"></div>
						<div data-bind="html: description" class="skill-description"></div>
						
						<div data-bind="if: currentRankDescription" class="current-rank-description">Current rank: <span data-bind="	text: currentRankDescription"></span></div>
						<div data-bind="if: nextRankDescription" class="next-rank-description">Next rank: <span data-bind="	text: nextRankDescription"></span></div>
						
						<ul class="skill-links">
							<!--ko foreach: links-->
							<li>
								<a data-bind="attr: { href: url }, click: function(){ 
									_gaq.push(['_trackEvent',$parent.title, label, url]);
									return true;
									}, text: label" target="_blank"></a>
							</li>
							<!--/ko-->
						</ul>
						<!-- <ul class="stats"> -->
							<!--ko foreach: stats-->
							<!-- <li><span class="value">+<span data-bind="text: value"></span></span> <span data-bind="	text: title" class="title"></span></li> -->
							<!--/ko-->
						<!-- </ul> -->
						<!--ko if: talentSummary-->
						<!-- <div class="talent-summary">Grants <span data-bind="text: talentSummary"></span></div> -->
						<!--/ko-->
						
					</div>
					<div class="skill-points"><span data-bind="text: points" class="points"></span>/<span data-bind="	text: maxPoints" class="max-points"></span></div>
					<div data-bind="click: addPoint, rightClick: removePoint" class="hit-area"></div>
				</div>
			</div>
			<!--/ko-->
		</div>
	</div>
</div>
<div class="ltIE9-show ltIE9-warning">
	<h2>Please upgrade your browser!</h2>
	<p>Try one of these free options:</p>
	<ul>
		<li><a onclick="_gaq.push(['_trackEvent','external link','upgrade browser','Chrome']);" href="http://google.com/chrome" target="_blank">Google Chrome</a></li>
		<li><a onclick="_gaq.push(['_trackEvent','external link','upgrade browser','MSIE']);" href="http://windows.microsoft.com/en-US/internet-explorer/download-ie" target="_blank">Microsoft Internet Explorer 10</a></li>
		<li><a onclick="_gaq.push(['_trackEvent','external link','upgrade browser','Firefox']);" href="www.mozilla.org/en-US/firefox" target="_blank">Mozilla Firefox</a></li>
	</ul>
</div>