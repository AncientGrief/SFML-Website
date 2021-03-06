<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Vector3.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_60c5c649f8df3b69a45a020d59f81335.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Vector3.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2009 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_VECTOR3_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_VECTOR3_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;{</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00037"></a><span class="lineno"><a class="code" href="classsf_1_1Vector3.php">   37</a></span>&#160;<span class="keyword">class </span><a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3</a></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;    <a class="code" href="classsf_1_1Vector3.php#aee8be1985c6e45e381ad4071265636f9" title="Default constructor.">Vector3</a>();</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    <a class="code" href="classsf_1_1Vector3.php#aee8be1985c6e45e381ad4071265636f9" title="Default constructor.">Vector3</a>(T X, T Y, T Z);</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00060"></a><span class="lineno"><a class="code" href="classsf_1_1Vector3.php#a3cb0c769390bc37c346bb1a69e510d16">   60</a></span>&#160;<span class="comment"></span>    T <a class="code" href="classsf_1_1Vector3.php#a3cb0c769390bc37c346bb1a69e510d16" title="X coordinate of the vector.">x</a>; </div>
<div class="line"><a name="l00061"></a><span class="lineno"><a class="code" href="classsf_1_1Vector3.php#a6590d50ccb862c5efc5512e974e9b794">   61</a></span>&#160;    T <a class="code" href="classsf_1_1Vector3.php#a6590d50ccb862c5efc5512e974e9b794" title="Y coordinate of the vector.">y</a>; </div>
<div class="line"><a name="l00062"></a><span class="lineno"><a class="code" href="classsf_1_1Vector3.php#a2f36ab4b552c028e3a9734c1ad4df7d1">   62</a></span>&#160;    T <a class="code" href="classsf_1_1Vector3.php#a2f36ab4b552c028e3a9734c1ad4df7d1" title="Z coordinate of the vector.">z</a>; </div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;};</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a> operator -(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V);</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; operator +=(<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V1, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V2);</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; operator -=(<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V1, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V2);</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a> operator +(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V1, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V2);</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a> operator -(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V1, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V2);</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a> operator *(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V, T X);</div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a> operator *(T X, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V);</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; operator *=(<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V, T X);</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a> operator /(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V, T X);</div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;</div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; operator /=(<a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V, T X);</div>
<div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00194"></a><span class="lineno">  194</span>&#160;<span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V1, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V2);</div>
<div class="line"><a name="l00195"></a><span class="lineno">  195</span>&#160;</div>
<div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;<span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V1, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;T&gt;</a>&amp; V2);</div>
<div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;</div>
<div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector3.inl&gt;</span></div>
<div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;</div>
<div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;<span class="comment">// Define the most common types</span></div>
<div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;<span class="keyword">typedef</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;int&gt;</a>   <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3i</a>;</div>
<div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;<span class="keyword">typedef</span> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3&lt;float&gt;</a> <a class="code" href="classsf_1_1Vector3.php" title="Vector3 is an utility class for manipulating 3 dimensional vectors.">Vector3f</a>;</div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;</div>
<div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;</div>
<div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;</div>
<div class="line"><a name="l00217"></a><span class="lineno">  217</span>&#160;<span class="preprocessor">#endif // SFML_VECTOR3_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
