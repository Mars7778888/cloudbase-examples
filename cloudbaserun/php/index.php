<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>浪漫营业中随机问题箱</title>
	<style>
		.bg{
			width:100%;
			height:auto;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			position: absolute;
			top: 0px;
			bottom: 0px;
			background-image: url(https://6865-hello-cloudbase-7gz02kg4a3497f0f-1252311972.tcb.qcloud.la/2.jpg?sign=8edc57b026ef43b4643a85adf7be0630&t=1629702145);
				background-repeat: no-repeat;
					background-size: 100% 100%;
			
		}
		.content{
			width:95%;
			height:100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.content_b{
			width:95%;
			height:100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
<body class="body">
	<div class="bg">
	<?php
		$arr = [
			"1 你强势吗？如果是女生比你会喝酒会社交、会整合资源。",
			"2 如果谈恋爱，你能为对方做些什么呢？",
			"3 你觉得逆商对男生重不重要，你能举例具备逆商的一个事情吗？",
			"4 你希望你的另一半是什么样子？",
			"5 你喜欢特殊待遇吗？比方你的另一半对别人都很高冷，在你面前是个逗比/你的另一半对谁都挺强势，但是对你特别包容。",
			"6 父母的相处模式和自己与父母的相处模式是什么样。",
			"7 说说你最好的朋友工作之余都会做什么，兴趣是什么。（至少3人）",
			"8 每年都有外出旅游吗？（岛内岛外均可）",
			"9 你的工作给予你的成就感或者兴趣点是什么。（对待工作的态度/幸福感/规划）",
			"10 婚后是否与父母同住。",
			"11 最喜欢的电影、书和音乐是什么?",
			"12 对自己未来的职业规划是什么",
			"13 你觉得自己是怎么样的人",
			"14 你对恋爱和婚姻有什么看法",
			"15 能否接受宠物",
			"16 目前在哪里工作。",
			"17 平时有什么爱好。",
			"18 对另一半有什么要求。",
			"19 学生时代都是在海口吗。",
			"20 以后是否在海口定居。",
			"21 最反感女生什么行为？",
			"22 怎么看待女生和异性的相处？",
			"23 和一个女生在一起什么样的状态让你觉得最舒适？",
			"24 两个人在一起最重要是什么？",
			"25 平时休闲的时候喜欢做什么？",
			"26 会做饭和家务吗",
			"27 刷抖音吗",
			"28 下了班的时间喜欢做什么",
			"29 周末喜欢做什么",
			"30 更希望和父母住还是自己住",
			"31 Ta的哪个动作或者表情会让你觉得加分",
			"32 喜欢旅游、音乐、玩游戏吗",
			"33 女生哪些特质会容易吸引到你？",
			"34 上段感情分手的原因？",
			"35 感情里觉得哪些方面比较重要或者必不可少？",
			"36 如果喜欢的另一半比较被动你会怎么做？",
			"37 你认为男女的热恋期有多久？过了热恋期该如何保鲜？",
			"38 你是粘人的人吗？",
			"39 你觉得海口哪家美食值得二刷",
			"40 男朋友在小区门口等你，你上车后发现他没有调转车头，你会说……？",
			"41 你觉得海口哪家餐厅不好吃、不合你胃口？",
			"42 说说你最近看到的一件不爽的事，可以是某条微博热搜。",
			"43 如果有一张机票，此刻想飞到哪",
			"44 自己做过觉得最糗的事",
			"45 Ta做什么事让你最不能忍受",
			"46 简单介绍一下家庭成员。",
			"47 有想做但一直没做的事吗？",
			"48 不工作的时候喜欢做些什么？",
			"49 定义一下自己心目当中的亲密关系。",
			"50 爱情里最在意哪三件事？",
			"51 不喜欢什么样的男生",
			"52 说出男生最让女生心动的3个心动瞬间",
			"53 最想和伴侣做的3件事",
			"54 与前任为什么分手",
			"55 颜值即正义吗",
			"56 最想和伴侣去哪里旅游（国内和国外）",
			"57 是否还有放不下的人",
			"58 男生应该有的优秀习惯",
			"59 难过的时候会做些什么",
			"60 男生哪些细节会被讨厌",
			"61 周末做什么",
			"62 那些年的遗憾",
			"63 吵架后的道歉方式",
			"64 吵架后会主动和好吗？"
		];
		$num = count($arr);
		$rand = rand(0,$num - 1);
	?>
	<div id="content" class="content">
		<?php echo $arr[$rand]; ?>
	</div>
	<div class="content_b">			
		<button style="width:45%;height: 50px;padding:0;" onclick="buttonClick();">  
		  随机抽取一个问题
		</button>
	</div>
	</div>
</body>

</html>
   <script>  
		var arr = [
			"1 你强势吗？如果是女生比你会喝酒会社交、会整合资源。",
			"2 如果谈恋爱，你能为对方做些什么呢？",
			"3 你觉得逆商对男生重不重要，你能举例具备逆商的一个事情吗？",
			"4 你希望你的另一半是什么样子？",
			"5 你喜欢特殊待遇吗？比方你的另一半对别人都很高冷，在你面前是个逗比/你的另一半对谁都挺强势，但是对你特别包容。",
			"6 父母的相处模式和自己与父母的相处模式是什么样。",
			"7 说说你最好的朋友工作之余都会做什么，兴趣是什么。（至少3人）",
			"8 每年都有外出旅游吗？（岛内岛外均可）",
			"9 你的工作给予你的成就感或者兴趣点是什么。（对待工作的态度/幸福感/规划）",
			"10 婚后是否与父母同住。",
			"11 最喜欢的电影、书和音乐是什么?",
			"12 对自己未来的职业规划是什么",
			"13 你觉得自己是怎么样的人",
			"14 你对恋爱和婚姻有什么看法",
			"15 能否接受宠物",
			"16 目前在哪里工作。",
			"17 平时有什么爱好。",
			"18 对另一半有什么要求。",
			"19 学生时代都是在海口吗。",
			"20 以后是否在海口定居。",
			"21 最反感女生什么行为？",
			"22 怎么看待女生和异性的相处？",
			"23 和一个女生在一起什么样的状态让你觉得最舒适？",
			"24 两个人在一起最重要是什么？",
			"25 平时休闲的时候喜欢做什么？",
			"26 会做饭和家务吗",
			"27 刷抖音吗",
			"28 下了班的时间喜欢做什么",
			"29 周末喜欢做什么",
			"30 更希望和父母住还是自己住",
			"31 Ta的哪个动作或者表情会让你觉得加分",
			"32 喜欢旅游、音乐、玩游戏吗",
			"33 女生哪些特质会容易吸引到你？",
			"34 上段感情分手的原因？",
			"35 感情里觉得哪些方面比较重要或者必不可少？",
			"36 如果喜欢的另一半比较被动你会怎么做？",
			"37 你认为男女的热恋期有多久？过了热恋期该如何保鲜？",
			"38 你是粘人的人吗？",
			"39 你觉得海口哪家美食值得二刷",
			"40 男朋友在小区门口等你，你上车后发现他没有调转车头，你会说……？",
			"41 你觉得海口哪家餐厅不好吃、不合你胃口？",
			"42 说说你最近看到的一件不爽的事，可以是某条微博热搜。",
			"43 如果有一张机票，此刻想飞到哪",
			"44 自己做过觉得最糗的事",
			"45 Ta做什么事让你最不能忍受",
			"46 简单介绍一下家庭成员。",
			"47 有想做但一直没做的事吗？",
			"48 不工作的时候喜欢做些什么？",
			"49 定义一下自己心目当中的亲密关系。",
			"50 爱情里最在意哪三件事？",
			"51 不喜欢什么样的男生",
			"52 说出男生最让女生心动的3个心动瞬间",
			"53 最想和伴侣做的3件事",
			"54 与前任为什么分手",
			"55 颜值即正义吗",
			"56 最想和伴侣去哪里旅游（国内和国外）",
			"57 是否还有放不下的人",
			"58 男生应该有的优秀习惯",
			"59 难过的时候会做些什么",
			"60 男生哪些细节会被讨厌",
			"61 周末做什么",
			"62 那些年的遗憾",
			"63 吵架后的道歉方式",
			"64 吵架后会主动和好吗？"
		];
        function buttonClick(){  
            var con = document.getElementById("content");  
			var round = Math.round(Math.random()*(arr.length-1));
			con.innerHTML = arr[round];
        }  
    </script> 
