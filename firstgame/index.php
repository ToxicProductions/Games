 <?php
	if(isset($_POST['nick']) && addslashes(trim($_POST['nick'])) != "" && !isset($_POST['score'])){
 ?>
<!-- START INCLUDES -->
<!--[if IE]><script src="lib/excanvas.js"></script><![endif]-->
 <script src="lib/prototype-1.6.0.2.js"></script>
<!-- box2djs -->
 <script src='js/box2d/common/b2Settings.js'></script>
 <script src='js/box2d/common/math/b2Vec2.js'></script>
 <script src='js/box2d/common/math/b2Mat22.js'></script>
 <script src='js/box2d/common/math/b2Math.js'></script>
 <script src='js/box2d/collision/b2AABB.js'></script>
 <script src='js/box2d/collision/b2Bound.js'></script>
 <script src='js/box2d/collision/b2BoundValues.js'></script>
 <script src='js/box2d/collision/b2Pair.js'></script>
 <script src='js/box2d/collision/b2PairCallback.js'></script>
 <script src='js/box2d/collision/b2BufferedPair.js'></script>
 <script src='js/box2d/collision/b2PairManager.js'></script>
 <script src='js/box2d/collision/b2BroadPhase.js'></script>
 <script src='js/box2d/collision/b2Collision.js'></script>
 <script src='js/box2d/collision/Features.js'></script>
 <script src='js/box2d/collision/b2ContactID.js'></script>
 <script src='js/box2d/collision/b2ContactPoint.js'></script>
 <script src='js/box2d/collision/b2Distance.js'></script>
 <script src='js/box2d/collision/b2Manifold.js'></script>
 <script src='js/box2d/collision/b2OBB.js'></script>
 <script src='js/box2d/collision/b2Proxy.js'></script>
 <script src='js/box2d/collision/ClipVertex.js'></script>
 <script src='js/box2d/collision/shapes/b2Shape.js'></script>
 <script src='js/box2d/collision/shapes/b2ShapeDef.js'></script>
 <script src='js/box2d/collision/shapes/b2BoxDef.js'></script>
 <script src='js/box2d/collision/shapes/b2CircleDef.js'></script>
 <script src='js/box2d/collision/shapes/b2CircleShape.js'></script>
 <script src='js/box2d/collision/shapes/b2MassData.js'></script>
 <script src='js/box2d/collision/shapes/b2PolyDef.js'></script>
 <script src='js/box2d/collision/shapes/b2PolyShape.js'></script>
 <script src='js/box2d/dynamics/b2Body.js'></script>
 <script src='js/box2d/dynamics/b2BodyDef.js'></script>
 <script src='js/box2d/dynamics/b2CollisionFilter.js'></script>
 <script src='js/box2d/dynamics/b2Island.js'></script>
 <script src='js/box2d/dynamics/b2TimeStep.js'></script>
 <script src='js/box2d/dynamics/contacts/b2ContactNode.js'></script>
 <script src='js/box2d/dynamics/contacts/b2Contact.js'></script>
 <script src='js/box2d/dynamics/contacts/b2ContactConstraint.js'></script>
 <script src='js/box2d/dynamics/contacts/b2ContactConstraintPoint.js'></script>
 <script src='js/box2d/dynamics/contacts/b2ContactRegister.js'></script>
 <script src='js/box2d/dynamics/contacts/b2ContactSolver.js'></script>
 <script src='js/box2d/dynamics/contacts/b2CircleContact.js'></script>
 <script src='js/box2d/dynamics/contacts/b2Conservative.js'></script>
 <script src='js/box2d/dynamics/contacts/b2NullContact.js'></script>
 <script src='js/box2d/dynamics/contacts/b2PolyAndCircleContact.js'></script>
 <script src='js/box2d/dynamics/contacts/b2PolyContact.js'></script>
 <script src='js/box2d/dynamics/b2ContactManager.js'></script>
 <script src='js/box2d/dynamics/b2World.js'></script>
 <script src='js/box2d/dynamics/b2WorldListener.js'></script>
 <script src='js/box2d/dynamics/joints/b2JointNode.js'></script>
 <script src='js/box2d/dynamics/joints/b2Joint.js'></script>
 <script src='js/box2d/dynamics/joints/b2JointDef.js'></script>
 <script src='js/box2d/dynamics/joints/b2DistanceJoint.js'></script>
 <script src='js/box2d/dynamics/joints/b2DistanceJointDef.js'></script>
 <script src='js/box2d/dynamics/joints/b2Jacobian.js'></script>
 <script src='js/box2d/dynamics/joints/b2GearJoint.js'></script>
 <script src='js/box2d/dynamics/joints/b2GearJointDef.js'></script>
 <script src='js/box2d/dynamics/joints/b2MouseJoint.js'></script>
 <script src='js/box2d/dynamics/joints/b2MouseJointDef.js'></script>
 <script src='js/box2d/dynamics/joints/b2PrismaticJoint.js'></script>
 <script src='js/box2d/dynamics/joints/b2PrismaticJointDef.js'></script>
 <script src='js/box2d/dynamics/joints/b2PulleyJoint.js'></script>
 <script src='js/box2d/dynamics/joints/b2PulleyJointDef.js'></script>
 <script src='js/box2d/dynamics/joints/b2RevoluteJoint.js'></script>
 <script src='js/box2d/dynamics/joints/b2RevoluteJointDef.js'></script>
 <script src='js/box2dutils.js'></script>
 <script>
 function showSubmit(){
	document.getElementById('messages').innerHTML = '<form method=\'POST\'><input type=\'hidden\' name=\'nick\' value=\''+nick+'\' /><input type=\'hidden\' name=\'board\' value=\''+board+'\' /><input type=\'hidden\' name=\'score\' value=\''+ (score-1) +'\' /><input type=\'submit\' name=\'submit\' value=\'Submit Score\' /></form>';
 }
 </script>
 <!-- END INCLUDES -->
 <script>
   var nick = "<?php echo(addslashes(trim(@substr($_POST['nick'],0,32)))); ?>";
   var showthewin = false;
   var board = "main";
   var score = 0;
   var level = 1;
 </script>
 <script src='js/game.js'></script>
 <!-- <a href='#' onclick='showthewin = true;'>AutoWin</a><br /> -->
 <canvas id="game" width="600" height="400"></canvas>
 <?php }elseif(!isset($_POST['score'])){ ?>
 <form action='./' method='POST'>
   <input type='text' placeholder='Nickname' value='<?php echo((isset($_GET['nick']) ? trim(addslashes(str_replace(array("'","<",">"),array("&#39;","&lt;","&gt;"),$_GET['nick']))) : "")); ?>' name='nick' /><br /><input type='submit' name='submit' value='Play!' />
 </form>
 <?php }else{
	$db = new PDO("mysql:host=localhost;port=3306;dbname=toxicgames","toxicgames","flakebar1");
	$qry = $db->prepare("INSERT INTO `scores` (`id`,`nick`,`score`,`leaderboard`,`time`) VALUES ('',?,?,?,".time().")");
	$qry->execute(array($_POST['nick'],$_POST['score'],$_POST['board']));
	header("Location: ./");
 ?>
 <?php } ?>
 <div id='messages'></div>