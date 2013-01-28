//Musify.js by Corey Mwamba, 9 Oct 2010 
//Dustin Diaz' selective ClassName hack
function getElementsByClassName(node,classname) {
  if (node.getElementsByClassName) { // use native implementation if available
    return node.getElementsByClassName(classname);
  } else {
    return (function getElementsByClass(searchClass,node) {
        if ( node == null )
          node = document;
        var classElements = [],
            els = node.getElementsByTagName("*"),
            elsLen = els.length,
            pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)"), i, j;

        for (i = 0, j = 0; i < elsLen; i++) {
          if ( pattern.test(els[i].className) ) {
              classElements[j] = els[i];
              j++;
          }
        }
        return classElements;
    })(classname, node);
  }
}
var headID = document.getElementsByTagName("head")[0];         
var cssNode = document.createElement('link');
cssNode.type = 'text/css';
cssNode.rel = 'stylesheet';


//THIS LINE IS THE ONE TO EDIT - change to where you have put the CSS file
cssNode.href = 'http://musify.coreymwamba.co.uk/musify_1.0/musify.css';



headID.appendChild(cssNode);

var tes = document.getElementsByClassName('musify');

for (var i=0; i < tes.length; i++ ) {
tes[i].style.display = "normal";
//new way: regexp the brackets first
setthlxp = new RegExp ("(\\&lt;\\|)(\\s*)(\\d\\W\\s*)", "g");
setthrxp = new RegExp ("(\\d*)(\\s*)(\\|\\&gt;)", "g");
sevsubun = new RegExp ("(<sub>)([^7]*)(<sup>)(7)(<\\/sup>)", "g");
setthelb = "&#10092;"
settherb = "&#10093;"
ubo = tes[i].innerHTML.replace  (/\[-/g, "<sub>");
ubc = ubo.replace (/-\]/g, "</sub>");
sharp = ubc.replace  (/\#/g, "<abbr title='sharp'>&#9839;</abbr>");
dsharp = sharp.replace (/\<abbr title='sharp'>\&\#9839;\<\/abbr\>\<abbr title='sharp'>\&\#9839;\<\/abbr\>/g, "<abbr class='dblsharp' title='double sharp'>&#10018;</abbr>");
resubo = dsharp.replace ("[<sub>", "<sup>&#9839;");
tied = resubo.replace (/(\-\-)/g,  "<span class='musitie'>&#9181;</span>");
tieu = tied.replace (/(\=\=)/g, "<span class='musotie'>&#9180;</span>");
losq = tieu.replace (setthlxp, setthelb+"$2$3");
rosq = losq.replace (setthrxp, "$1$2"+settherb);
hdim = rosq.replace ("~", "<sup class='mushdim'><abbr title='half-diminished'>&#248;</abbr></sup>");
snbo = hdim.replace (/(\[\[)/g, "<sup>");
snbc = snbo.replace (/(\]\])/g,"</sup>");
sbo = snbc.replace (/\(\(/g, "<sup>(");
sbc = sbo.replace  (/\)\)/g, ")</sup>");
scbo = sbc.replace (/\{\{/g, "<span class='musnum'>");
scbc = scbo.replace (/(\}\})/g, "</span>");
scbs = scbc.replace (/(\/\/)/g, "</span>&#8260;<span class='musden'>");
scbns = scbs.replace (/\@/g, "</span><span class='timden'>"); 
dim = scbns.replace (/\_/g, "<sup class='musdim'>&#176;</sup>");
tri =dim.replace (/\^/g, "&#916;");
mult = tri.replace  (/\*/g, "&#215;");
flat = mult.replace (/(\£)|(\¤)|(\$)|(\€)|(\¥)/g, "<abbr title='flat'>&#9837;</abbr>");
sim = flat.replace (/\%/g, "<abbr title='simile'>&#247;</abbr>");
ell = sim.replace (/(\.\.\.)/g, "&#8230;");
nat = ell.replace (/\?/g, "<abbr title='natural'>&#9838;</abbr>");
bre = nat.replace (/(\!\!)/g, "<br />");
tes[i].innerHTML = bre;
}