<?xml version="1.0" encoding="utf-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="text"/>
<xsl:template match="register">


\documentclass[12pt]{article}
\usepackage{amsmath}
\usepackage{latexsym}
\usepackage{amsfonts}
\usepackage[normalem]{ulem}
\usepackage{array}
\usepackage{amssymb}
\usepackage{graphicx}
\usepackage[backend=biber,
style=numeric,
sorting=none,
isbn=false,
doi=false,
url=false,
]{biblatex}\addbibresource{bibliography.bib}

\usepackage{subfig}
\usepackage{wrapfig}
\usepackage{wasysym}
\usepackage{enumitem}
\usepackage{adjustbox}
\usepackage{ragged2e}
\usepackage[svgnames,table]{xcolor}
\usepackage{tikz}
\usepackage{longtable}
\usepackage{changepage}
\usepackage{setspace}
\usepackage{hhline}
\usepackage{multicol}
\usepackage{tabto}
\usepackage{float}
\usepackage{multirow}
\usepackage{makecell}
\usepackage{fancyhdr}
\usepackage[toc,page]{appendix}
\usepackage[hidelinks]{hyperref}
\usetikzlibrary{shapes.symbols,shapes.geometric,shadows,arrows.meta}
\tikzset{>={Latex[width=1.5mm,length=2mm]}}
\usepackage{flowchart}\usepackage[paperheight=8.27in,paperwidth=11.69in,left=1.0in,right=1.0in,top=1.25in,bottom=0.5in,headheight=1in]{geometry}
\usepackage[utf8]{inputenc}
\usepackage[T1]{fontenc}
\TabPositions{0.49in,0.98in,1.47in,1.96in,2.45in,2.94in,3.43in,3.92in,4.41in,4.9in,5.39in,5.88in,6.37in,6.86in,7.35in,7.84in,8.33in,8.82in,9.31in,}

\urlstyle{same}




\setcounter{tocdepth}{5}
\setcounter{secnumdepth}{5}




\setlistdepth{9}
\renewlist{enumerate}{enumerate}{9}
		\setlist[enumerate,1]{label=\arabic*)}
		\setlist[enumerate,2]{label=\alph*)}
		\setlist[enumerate,3]{label=(\roman*)}
		\setlist[enumerate,4]{label=(\arabic*)}
		\setlist[enumerate,5]{label=(\Alph*)}
		\setlist[enumerate,6]{label=(\Roman*)}
		\setlist[enumerate,7]{label=\arabic*}
		\setlist[enumerate,8]{label=\alph*}
		\setlist[enumerate,9]{label=\roman*}

\renewlist{itemize}{itemize}{9}
		\setlist[itemize]{label=$\cdot$}
		\setlist[itemize,1]{label=\textbullet}
		\setlist[itemize,2]{label=$\circ$}
		\setlist[itemize,3]{label=$\ast$}
		\setlist[itemize,4]{label=$\dagger$}
		\setlist[itemize,5]{label=$\triangleright$}
		\setlist[itemize,6]{label=$\bigstar$}
		\setlist[itemize,7]{label=$\blacklozenge$}
		\setlist[itemize,8]{label=$\prime$}



 %%%%%%%%%%%%  Header here  %%%%%%%%%%%%%%


\pagestyle{fancy}
\fancyhf{}
\chead{ 
\vspace{\baselineskip}






}
\cfoot{ \tab }
\renewcommand{\headrulewidth}{0pt}
\setlength{\topsep}{0pt}\setlength{\parindent}{0pt}
\renewcommand{\arraystretch}{1.3}


%%%%%%%%%%%%%%%%%%%% Document code starts here %%%%%%%%%%%%%%%%%%%%



\begin{document}

\vspace{\baselineskip}
\begin{Center}
{\fontsize{20pt}{24.0pt}\selectfont \textbf{
Attestation de participation
 }\par}
 \vspace{\baselineskip}

 Ce document atteste que
\end{Center}\par


\vspace{\baselineskip}
\begin{Center}
{\fontsize{20pt}{24.0pt}\selectfont \textbf{
<xsl:for-each select="participant">
 
 <xsl:value-of select="firstName"/>\hspace*{5mm}<xsl:value-of select="lastName"/> 

 }\par}
\end{Center}\par


\vspace{\baselineskip}
\begin{Center}
pourra participer à la conference intitulée : \\
Conference IAO

\end{Center}\par





\vspace{\baselineskip}



\vspace{\baselineskip}
\begin{Center}
tenue le :
\end{Center}\par


\vspace{\baselineskip}
\begin{Center}
\textit{jour mois année}
\end{Center}\par


\vspace{\baselineskip}


\vspace{\baselineskip}





\vspace{\baselineskip}
\begin{Center}
{\fontsize{10pt}{12.0pt}\selectfont Identifiant unique du participant: 	<xsl:value-of select="@id"/> \par}
\end{Center}\par

 

 </xsl:for-each>

\vspace{\baselineskip}

\printbibliography

\end{document}

 
 </xsl:template></xsl:stylesheet>