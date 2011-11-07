<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>grml.org - FAQ</title>
<meta name="Title" content="grml.org - FAQ" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="FAQ of grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/faq/" />
<meta name="Robots" content="index,follow" />
<meta name="Language" content="english" />
<meta name="identifier-url" content="http://www.grml.org/" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="home" href="/" title="grml.org" />
<link rel="help" href="/features/" title="About" />
<link rel="author" href="/team/" title="Team" />
<link rel="icon" href="/favicon.png" type="image/png" />
<link rel="stylesheet" href="/style.css" type="text/css" />
</head>

<body>
<?php include '../static.inc'; ?>

      <div class="content">

        <p><img style="float: right" src="/img/clanbomber.png" alt="*" /></p>

	<h1 align="center">FAQ for release 2010.04</h1>

        <p><a name="toc"></a><strong>Index:</strong></p>

        <p class="toc"><a href="#general">General:</a></p>
        <ol>
          <li><a href="#whatis">What is grml?</a></li>
          <li><a href="#get">Where do I get grml?</a></li>
          <li><a href="#whatmeans">What does grml mean?</a></li>
          <li><a href="#pronounce">How do you pronounce grml?</a></li>
          <li><a href="#releasename">What about the release name?</a></li>
          <li><a href="#requirements">Requirements for running grml</a></li>
          <li><a href="#why">Why another Linux distribution?</a></li>
          <li><a href="#license">What's the license of grml?</a></li>
          <li><a href="#difference">What's the difference between grml and $OTHER-DISTRIBUTION? What are the main goals?</a></li>
          <li><a href="#knoppix">What's the difference between grml and Knoppix?</a></li>
          <li><a href="#accessibility">What does accessibility at grml mean?</a></li>
          <li><a href="#bootoptions">Which bootoptions does grml support?</a></li>
          <li><a href="#emulation">Is it possible to run grml with $EMULATOR?</a></li>
          <li><a href="#usbboot">How do I boot grml from a USB stick?</a></li>
          <li><a href="#store">Is it possible to store my settings?</a></li>
          <li><a href="#persistency">Is a persistency feature available?</a></li>
        </ol>

        <p class="toc"><a href="#grmlmedium">grml-medium</a> / <a
        href="#grmlsmall">grml-small</a> / <a
        href="#grml64">grml64</a>:</p>
        <ol>
          <li><a href="#whatismedium">What is grml-medium?</a></li>
          <li><a href="#whatissmall">What is grml-small?</a></li>
          <li><a href="#whatisgrml64">What is grml64?</a></li>
          <li><a href="#whatismedium64">What is grml64-medium?</a></li>
          <li><a href="#whatissmall64">What is grml64-small?</a></li>
          <li><a href="#grml64vsnormal">What is the difference between 32 bit grml and 64 bit grml?</a></li>
          <li><a href="#smallvsnormal">What is the difference between 'normal' grml and grml-small?</a></li>
          <li><a href="#grmlvsdsl">What is the difference between grml-small and DSL?</a></li>
        </ol>

        <p class="toc"><a href="#problems">Problems</a>:</p>
        <ol>
          <li><a href="#known_issues">Are there any known issues with this release?</a></li>
          <li><a href="#hardware">I have problems with my hardware!</a></li>
          <li><a href="#boot">grml does not boot on my computer!</a></li>
          <li><a href="#fbprobs">I don't see anything when booting grml?!</a></li>
          <li><a href="#utf8">I have problems with UTF-8 / Unicode</a></li>
          <li><a href="#grml2hdhang">grml2hd seems to hang?!</a></li>
          <li><a href="#missingfiles">I noticed some files are missing on grml</a></li>
          <li><a href="#bugreport">Bugreport</a></li>
        </ol>

        <p class="toc"><a href="#system">System</a>:</p>
        <ol>
          <li><a href="#isolinux">Where's the old bootsplash?</a></li>
          <li><a href="#configure">Which tools exist to configure grml?</a></li>
          <li><a href="#password">What are the passwords of users on grml?</a></li>
          <li><a href="#version">How do I find out the version of grml</a></li>
          <li><a href="#remove_cd">Is it possible to run LiveCD and eject CD-ROM?</a></li>
          <li><a href="#language">How do I change the language/keyboard settings?</a></li>
          <li><a href="#kde_and_foo">KDE, Gnome, $FOO and $BAR</a></li>
          <li><a href="#wms">Which window managers can I use?</a></li>
          <li><a href="#usbmount">How do I mount a USB device / USB stick?</a></li>
          <li><a href="#lvm">Where are my LVM devices?</a></li>
          <li><a href="#swraid">Where are my Software-RAID devices?</a></li>
          <li><a href="libata">Why doesn't grml find my disks / doesn't boot?</a></li>
          <li><a href="#booting">Which ways exist to boot grml?</a></li>
          <li><a href="#timezone">How do I configure timezone on my grml system?</a></li>
          <li><a href="#hdinstall">Is it possible to install grml to harddisk?</a></li>
        </ol>

        <p class="toc"><a href="#kernel">Kernel</a>:</p>
        <ol>
          <li><a href="#kernelconfig">Where can I find the configuration for the kernel used on grml?</a></li>
          <li><a href="#kernelpatches">Are there any special components/patches in the kernel used on grml?</a></li>
          <li><a href="#platform">For which platforms is the grml kernel optimized?</a></li>
        </ol>

        <p class="toc"><a href="#software">Software:</a></p>
        <ol>
          <li><a href="#sw_general">General</a></li>
          <li><a href="#sw_version">Which package(s) and which version is available?</a></li>
          <li><a href="#init">Init-System</a></li>
          <li><a href="#zsh">Why is zsh the default shell?</a></li>
          <li><a href="#zsh_binsh">Wasn't zsh the /bin/sh interpreter?</a></li>
          <li><a href="#bash">Is a bash available?</a></li>
          <li><a href="#configuration">Where can I find the configuration of zsh, GNU screen,...?</a></li>
          <li><a href="#truecrypt">Why isn't Truecrypt available within grml?</a></li>
          <li><a href="#grub">grub does not work on my system?!</a></li>
        </ol>

        <p class="toc"><a href="#xserver">X-Server</a></p>
        <ol>
          <li><a href="#xstart">How do I start the X server?</a></li>
          <li><a href="#xproblem">X does not start on my box?!</a></li>
          <li><a href="#xresolution">I don't like the resolution of X!</a></li>
        </ol>

        <p class="toc"><a href="#stuff">Support / Unanswered stuff</a></p>
        <ol>
          <li><a href="#questions">Further questions?</a></li>
          <li><a href="#support">Commercial Support</a></li>
        </ol>

        <h2><a name="general"></a><a href="#toc">General</a></h2>

        <h3><a name="whatis"></a><a href="#toc">What is grml?</a></h3>

        <p>Grml is a bootable CD (Live-CD) based on <a
        href="http://www.debian.org/">Debian</a>. Grml includes a collection of
        GNU/Linux software especially for system administrators and users of
        texttools. Grml provides automatic hardware detection. You can use grml
        as a rescue system, for analyzing systems/networks, or as a working
        environment. It is not necessary to install anything to a harddisk. Due
        to on-the-fly decompression grml includes more than 2GB of software and
        documentation on the CD.</p>

        <h3><a name="get"></a><a href="#toc">Where do I get grml?</a></h3>

        <p>Grml is open source, you can download it from the mirrors listed at
        <a href="/download">grml.org/download/</a>. If you want to get an
        original grml-CD including <a href="/files/#covers">the grml-cover</a>,
        need a special amount of CDs or want your own special grml-CD (including
        your logo, your software and/or special settings) <a
        href="/contact/">please don't hesitate to contact us</a>. Take a look at
        <a href="http://grml-solutions.com/">Grml Solutions</a> if you're
        interested in commercial support.</p>

        <h3><a name="whatmeans"></a><a href="#toc">What does grml mean?</a></h3>

        <p>Grml is short for 'grummel' and comes close to 'argl' or 'grrr' in
        English. People use this when they want to express their
        dissatisfaction/discontentedness with software (amongst other
        things):</p>

<pre class="rahmen">
$ grep -ch grml .centericq/**/history | xargs echo | \
  sed 's/[0-9]*/&amp; + /g' | sed 's/+ $//g' | bc -l
3746</pre>

        <h3><a name="pronounce"></a><a href="#toc">How do you pronounce grml?</a></h3>

<pre class="rahmen">
% flite -o play -t gremel</pre>
<!--
 $ echo 'ghroummel' | festival \-\-tts
-->

        <h3><a name="releasename"></a><a href="#toc">What about the release name?</a></h3>

        <p>Codename of Grml 2010.04 is Grmlmonster. Take a look look at the <a
        href="/screenshots/#grml1004">release screenshot</a> and
        think of <a href="http://en.wikipedia.org/wiki/Sesame_Street">Sesame
        Street's Cookie Monster</a> (in german known as <a
        href="http://de.wikipedia.org/wiki/Krümelmonster#Kr.C3.BCmelmonster">Krümelmonster</a>).
        </p>

        <h3><a name="requirements"></a><a href="#toc">Requirements for running grml</a></h3>

        <ul>

          <li>Intel-compatible CPU (i586 or later, preferably Pentium class or higher)</li>

          <li>grml/grml-medium: at least 64MB of RAM (for stable use with
          ramdisks for aufs and udev and when running X window system we
          recommend at least 128MB)</li>

          <li>grml-small: at least 32MB RAM should be available</li>

          <li>either a bootable CD-ROM drive or <a href="#usbboot">USB-boot
          capabable system</a> (for booting via network/PXE check out <a
          href="#terminalserver">grml-terminalserver</a>)</li>

        </ul>

        <h3><a name="why"></a><a href="#toc">Why another Linux distribution?</a></h3>

        <p>There already exist &quot;<a
        href="http://www.distrowatch.com/">some</a>&quot; distributions. We
        decided to base our work on the existing infrastructure of <a
        href="http://debian.org/">Debian</a> because we don't want to reinvent
        the wheel. Some admins already use their own rescue CD, Knoppix works
        but does not bring that many important tools for admins and users of
        texttools out of the box. Therefor we decided to share our work with
        others and provide the swiss army knife for sysadmins and texttool
        fans.</p>

        <h3><a name="license"></a><a href="#toc">What's the license of grml?</a></h3>

        <p>Anything written by the grml team is published under the GPL (<a
        href="http://www.gnu.org/copyleft/gpl.html">GNU General Public
        License</a>). You don't have to pay anything for using grml. If you want
        a special Live-CD or need commercial support, take a look at <a
        href="http://grml-solutions.com/">Grml Solutions</a>.</p>

        <h3><a name="difference"></a><a href="#toc">What's the difference between grml and
        $OTHER-DISTRIBUTION? What are the main goals?</a></h3>

        <p>The main goal of grml is to be a distribution well suited for
        sysadmins and users of texttools. Grml includes all the tools for
        admin's daily work (lvm, mdadm, dd/ddrescue,...) as well as many
        important texttools (of course awk, sed, grep, ...  but also zsh,
        mutt[ng], slrn, vim and many others). Grml uses the existing
        infrastructure of <a href="http://www.debian.org/">Debian</a>. Grml was
        once based on <a href="http://www.knopper.net/knoppix/">Knoppix</a> (see
        '<a href="#knoppix">What's the difference between grml and Knoppix?</a>'
        for more details). We are also merging useful things from other
          distributions/live-cds to provide a perfect environment.</p>

        <h3><a name="knoppix"></a><a href="#toc">What's the difference between grml and Knoppix?</a></h3>

        <p>Grml comes with a vastly different set of software. Missing KDE and
        OpenOffice provides the opportunity of shipping more than 800 packages
        which Knoppix does not provide on its CD version. Grml boots a recent
        2.6 kernel but no X by default for faster startup. Knoppix is based on
        Debian/testing-experimental (using apt-pinning), but grml is basically
        based on plain Debian/unstable providing more current versions of
        software. Grml was once based on Knoppix but nowadays has nothing in
        common with Knoppix:</p>

<pre class="rahmen">
# locate knoppix
# find / -iname \*knoppix\*
#</pre>

        <p>We consider Knoppix as a brand name for live-cds nowadays and provide
        most of Knoppix' features as well. Grml uses (mostly) the same <a
        href="http://git.grml.org/?p=grml-live.git;a=blob_plain;f=templates/GRML/grml-cheatcodes.txt;hb=HEAD">cheatcodes</a>
        for booting as Knoppix and even provides some extra ones. So if you are
        used to the basic Knoppix features you usually find them on the
        grml system as well.</p>

        <h3><a name="accessibility"></a><a href="#toc">What does accessibility at grml mean?</a></h3>

        <p>The Grml kernel includes <a href="/kernel/#speakup">support for
        speakup</a> and provides software like brltty (using bootoption 'grml
        blind brltty=type,port,tbl') and flite.</p>

        <h3><a name="bootoptions"></a><a href="#toc">Which bootoptions does Grml support?</a></h3>

        <p>Check out the <a
        href="http://git.grml.org/?p=grml-live.git;a=blob_plain;f=templates/GRML/grml-cheatcodes.txt;hb=HEAD">grml-cheatcodes
        file</a> (also available via <a href="http://grml.org/cheatcodes/">grml.org/cheatcodes/</a>). Of
        course <a
        href="http://www.kernel.org/doc/Documentation/kernel-parameters.txt">kernel-parameters.txt</a>
        of the Linux kernel applies to Grml as well.</p>

        <h3><a name="emulation"></a><a href="#toc">Is it possible to run grml with $EMULATOR?</a></h3>

        <p>Sure, Grml works with(in) several emulators and virtual environments,
        like e.g.
        <a href="http://www.linux-kvm.org/">KVM</a>,
        <a href="http://www.microsoft.com/windows/virtual-pc/">MS Virtual PC</a>,
        <a href="http://fabrice.bellard.free.fr/qemu/">QEMU</a>
        <a href="http://www.virtualbox.org/">Virtualbox</a> and
        <a href="http://www.vmware.com/">VMware</a>.
        </p>

        <h3><a name="usbboot"></a><a href="#toc">How do I boot grml from a USB stick?</a></h3>

        <p>Check out <a
        href="http://wiki.grml.org/doku.php?id=usb#grml2usb">grml2usb</a> at the
        <a href="http://wiki.grml.org/doku.php?id=usb">usb webpage in the
        grml-wiki.</a></p>

        <h3><a name="store"></a><a href="#toc">Is it possible to store my settings?</a></h3>

        <p>Yes. Grml provides a config framework, check out <a
        href="/config/">grml.org/config/</a>, <a
        href="file:///usr/share/doc/grml-saveconfig/grml-config.html">/usr/share/doc/grml-saveconfig/grml-config.html</a>
        and 'man grml-autoconfig save-config restore-config mkpersistenthome' for more
        details. Starting with release 2009.05 a <a
        href="#persistency">persistency option</a> is
        available.</p>

        <h3><a name="persistency"></a><a href="#doc">Is a persistency feature available?</a></h3>

        <p>Starting with release 2009.05 a persistency feature is available. Use
        <a
        href="http://grml.org/online-docs/live-snapshot.en.1.html">live-snapshot</a>
        (man live-snapshot) and the bootoption 'persistent' for enabling
        persistency.</p>

        <a name="grmlmedium"></a><a name="grmlsmall"></a><a name="grml64"></a>
        <h2></a><a href="#toc">grml-medium / grml-small / grml64?</a></h2>

        <h3><a name="whatismedium"></a><a href="#toc">What is grml-medium?</a></h3>

        <p>grml-medium is a grml-flavour which tries to close the gap between <a
        href="#whatissmall">grml-small</a> and <a
        href="#whatis">normal/large/full version of grml</a>. grml-medium is an
        ISO with a size of ~200MB providing the most important packages a
        sysadmin usually needs. It provides the same <a href="/kernel/">kernel
        version</a> as normal grml does so you can easily integrate and use some
        further existing external modules as well. The X.org server is shipped
        as well as the window manager fluxbox. Take a look at the <a
        href="/files/">'Debian-Information'-section</a> if you are searching for
        the package list. <a
        href="http://wiki.grml.org/doku.php?id=accessibility">accessibility
        features</a> are <strong>NOT</strong> available/supported on grml-medium
        though.</p>

        <h3><a name="whatissmall"></a><a href="#toc">What is grml-small?</a></h3>

        <p>Whereas grml provides about 2.3GB of software on a 700 MB ISO,
        grml-small is a flavor with about 100 MB ISO-size (~275 MB
        uncompressed).  It does not provide a lot of software (for example no
        X.org and no man pages) but the essential stuff for being a rescue
        system on a business card CD-ROM or a small USB device. You can use the
        Debian package management system to install software on the fly
        (assuming you have network access to a Debian mirror). It provides the
        same <a href="/kernel/">kernel version</a> as normal grml does so you
        can easily integrate and use some further existing external modules as
        well. Take a look at the <a
        href="/files/">'Debian-Information'-section</a> if you are searching for
        the package list.</p>

        <h3><a name="whatisgrml64"></a><a href="#toc">What is grml64?</a></h3>

        <p>grml64 is a 64bit-version of grml, based on <a
        href="http://www.debian.org/ports/amd64/">the amd64 port of
        Debian</a>.</p>

        <h3><a name="whatismedium64"></a><a href="#toc">What is grml64-medium?</a></h3>

        <p>grml64-medium is the 64bit version of <a href="#whatismedium">grml-medium</a>.</p>

        <h3><a name="whatissmall64">What is grml64-small?</a></h3>

        <p>grml64-small is the 64bit version of <a href="#whatissmall">grml-small</a>.</p>

        <h3><a name="grml64vsnormal"></a><a href="#toc">What is the difference between 32 bit grml and 64 bit grml?</a></h3>

        <p>The main difference of course is that grml64 is a 64bit-version
        whereas (normal) grml is 32bit-only. grml64 provides a 64bit kernel
        which supports 32bit userspace applications. grml64 also provides
        libc6-i386 and libc6-dev-i386.  Due to space reasons and because some
        packages aren't available for amd64 (yet) some few packages are missing on
        grml64 compared to (normal, 32bit) grml.</p>

        <h3><a name="smallvsnormal"></a><a href="#toc">What is the
        difference between 'normal' grml and grml-small?</a></h3>

        <p>The 700MB-grml brings more than 2500 software packages. grml-small
        includes about 300 software packages, lacks documentation and manpages
        on the ISO. <a href="#terminalserver">grml-terminalserver</a> and <a
        href="http://wiki.grml.org/doku.php?id=accessibility">accessibility
        features</a> are <strong>not</strong> available/supported on
        grml-small.</p>

        <h3><a name="grmlvsdsl"></a><a href="#toc">What is the
        difference between grml-small and DSL?</a></h3>

        <p>DSL (Damns Small Linux) and grml-small have different target
        audiences. <a href="http://www.damnsmalllinux.org/">Damn Small Linux</a>
        (DSL) uses kernel version 2.4 whereas grml-small provides a recent
        version of kernel version 2.6.  DSL provides the X window system which
        grml-small does not. grml-small on the other hand provides the most
        important packages for sysadmins and ships the original Debian package
        management which allows you to install packages of the Debian pool with
        no modifications.</p>

        <h2><a name="problems"></a><a href="#toc">Problems</a></h2>

        <a name="release"></a> <!-- old anchor -->
        <h3><a name="known_issues"></a><a href="#toc">Are there any known issues with this release?</a></h3>

        <p>We won't hide anything. Therefore, we do provide all known
        issues/bugs publicly available:</p>

        <ul>

          <li><a href="http://wiki.grml.org/doku.php?id=grml_2010.04">issues regarding
          grml 2010.04</a> in <a href="http://wiki.grml.org/">the grml-wiki</a></li>

          <li><a href="http://wiki.grml.org/doku.php?id=grml64_2010.04">issues
          regarding grml64 2010.04</a> in <a href="http://wiki.grml.org/">the
          grml-wiki</a></li>

          <li><a href="http://wiki.grml.org/doku.php?id=grml-medium_2010.04">issues
          regarding grml-medium 2010.04</a> in <a href="http://wiki.grml.org/">the
          grml-wiki</a></li>

          <li><a href="http://wiki.grml.org/doku.php?id=grml64-medium_2010.04">issues
          regarding grml64-medium 2010.04</a> in <a href="http://wiki.grml.org/">the
          grml-wiki</a></li>

          <li><a href="http://wiki.grml.org/doku.php?id=grml-small_2010.04">issues
          regarding grml-small 2010.04</a> in <a href="http://wiki.grml.org/">the
          grml-wiki</a></li>

          <li><a href="http://wiki.grml.org/doku.php?id=grml64-small_2010.04">issues
          regarding grml64-small 2010.04</a> in <a href="http://wiki.grml.org/">the
          grml-wiki</a></li>

        </ul>

        <p>If you find another bug, or consider something a problem not yet
        mentioned <a href="#bugreport">please it</a>.</p>

        <h3><a name="hardware"></a><a href="#toc">I have problems with my hardware!</a></h3>

        <p>Take a look at the script grml-hwinfo. This script generates a file
        named info.tar.bz2 which contains important information about your
        hardware. If you think we might help, please run grml-hwinfo and <a
        href="/contact/">send us the file</a> with additional, relevant
        information regarding your problem.</p>

        <h3><a name="boot"></a><a href="#toc">grml does not boot on my computer!</a></h3>

        <p>Please take a look at <a
        href="http://git.grml.org/?p=grml-live.git;a=blob_plain;f=templates/GRML/grml-cheatcodes.txt;hb=HEAD">the
        available bootparamters and cheatcodes</a> and '<a href="#booting">Which
        ways exist to boot grml?</a>'. Especially booting with 'acpi=off noapm
        noapic' might help. The bootparameter 'failsafe' provides minimal
        hardware detection using some special bootoptions (please do NOT boot
        with 'grml failsafe' but with 'failsafe' as first word of the boot
        commandline) . If booting hangs during stage &quot;Waiting for /dev to
        be fully populated&quot; please try booting with 'grml noudev'. If you
        don't even see the bootsplash of the grml-ISO your BIOS might be broken
        (pretty common especially on old hardware). Please consider using <a
        href="http://btmgr.sourceforge.net/">btmgr</a> then for booting your
        system. Also check out the <a
        href="http://wiki.grml.org/doku.php?id=problems">problems webpage</a> in
        <a href="http://wiki.grml.org/">the grml-wiki</a>. You still have
        problems? Feel free to <a href="/contact/">contact us</a>.</p>

        <h3><a name="fbprobs"></a><a href="#toc">I don't see anything when booting grml?!</a></h3>

        <p>Likely, this is a problem with the vesafb framebuffer. Try to boot
        with the 'Disable Framebuffer' menuentry (available behind the submenu
        'Boot options for ...') or manually ad 'vga=normal' to the kernel
        command line (press TAB to edit a menu entry and add 'vga=normal'
        to it then).</p>

        <h3><a name="utf8"></a><a href="#toc">I have problems with UTF-8 / Unicode</a></h3>

        <p>Check out <a
        href="http://wiki.grml.org/doku.php?id=utf8">UTF8-webpage in the
        grml-wiki</a>.</p>

        <h3><a name="grml2hdhang"></a><a href="#toc">grml2hd seems to hang?!</a></h3>

        <p>grml2hd seems to hang? Switch to tty12 and take a look at the syslog output.
        If you see something like:</p>

<pre class="rahmen">
SQUASHFS error: zlib_fs returned unexpected result 0x........
SQUASHFS error: Unable to read cache block [.....]
SQUASHFS error: Unable to read inode [.....]</pre>

        <p>your ISO/CD-ROM <em>very</em> probably is NOT ok. Verify it via
        booting with grml testcd if that works, or even better check your CD
        low-level via running:</p>

<pre class="rahmen">
# readcd -c2scan dev=/dev/cdrom</pre>

        <p>If the medium really is ok and it still fails try to boot with
        DMA deactivated via 'grml nodma ide=nodma libata.dma=0' at the bootprompt.</p>


        <h3><a name="missingfiles"></a><a href="#toc">I noticed some files are missing on grml</a></h3>

        <p>Yes, output of 'debsums -a 1&gt;/dev/null' might output some
        failures. The reason is pretty simple: some few modification have been
        done either because they are required for the provided environment or
        because of space limitiations on the ISO. The failures are nothing to
        really care about, but as we don't hide anything we thought it might be
        worth mentioning.</p>

        <h3><a name="bugreport"></a><a href="#toc">Bugreport</a></h3>

        <p>Searching for a bug? Want to report a bug? Take a look at the <a
        href="/bugs/">bugs webpage</a>.</p>

        <h2><a name="system"></a><a href="#toc">System</a></h2>

        <h3><a name="isolinux"></a><a href="#toc">Where's the old bootsplash?</a></h3>

        <p>Starting with release 2009.10 Grml provides a menu based bootsplash.
        To adjust boot options just press the TAB-key. To directly switch to the
        old-style isolinux cmdline just press the escape key within 30 seconds. If you
        still need access to the old bootsplash layout (including the f2, f3,...
        pages with further information regarding available bootoptions)
        select the entry 'Isolinux prompt' in the menu based bootsplash (just
        press 'i' and ENTER for direct access to it). The timeout until either
        the selected entry is booted (if specified) or until the system will
        restore from the cmdline to the menu based bootsplash is 30 seconds.</p>

        <h3><a name="configure"></a><a href="#toc">Which tools exist to configure grml?</a></h3>

        <p>Grml provides several scripts and tools which should make life
        easier. See 'dpkg -L grml-scripts' to get an overview of some main
        scripts. Run 'grml-config' to get a dialog interface for the most
        important scripts and tasks. Or just type 'grml-' and press tab-key to
        get a completion menu in the shell.</p>

        <h3><a name="password"></a><a href="#toc">What are the passwords of users on grml?</a></h3>

        <p>There are no default passwords - all accounts are locked by default
        for security reasons. Even local logins are not possible (unless you set
        a password or create new user accounts as root).  You can create valid
        passwords using "sudo passwd [username]" from the shell
        individually.</p>

        <h3><a name="version"></a><a href="#toc">How do I find out the version of grml</a></h3>

        <p>Run 'grml-version' or use the following command:</p>

<pre class="rahmen">
$ cat /etc/grml_version</pre>

        <h3><a name="remove_cd"></a><a href="#toc">Is it possible to run LiveCD and eject CD-ROM?</a></h3>

<pre class="rahmen">
% sudo umount -l /live/image
% sudo eject /dev/cdrom # now don't run any new programs unless you booted using 'toram'
% mount /dev/cdrom      # mount it again if needed
</pre>

        <h3><a name="language"></a><a href="#toc">How do I change the language/keyboard settings?</a></h3>

        <p>By default grml uses english settings. But it is possible to
        change the settings via using either the bootparam(s) lang,
        keyboard and xkeyboard or via executing grml-lang when grml is
        already running. Usage examples:</p>

<pre class="rahmen">
grml lang=de      # enter this at the bootprompt and you will get
                  # german keyboard layout and german $LANG, $LC_ALL,
                  # $LANGUAGE...
grml keyboard=de xkeyboard=de lang=at # enter this at the bootprompt
                  # and you will get german keyboard and austrian
                  # language variables
% grml-lang de    # enter this in the shell to switch keyboard layout
                  # and $LANG settings in a running grml-system
</pre>

        <p>If you are running grml from harddisk (using <a
        href="#hdinstall">grml2hd</a>) you have several options how to set
        language options:</p>

        <ul>

          <li>adjust /etc/default/locale to configure global language and
          environment settings</li>

          <li>set environment variables like $LC_ALL, $LANG, $LANGUAGE in your
          personal configuration files (like ~/.zshrc.local, see <a
          href="/zsh/">grml zsh reference card</a> for details)
          if you do not want to use them system wide/global</li>

          <li>adjust /etc/sysconfig/keyboard to configure keyboard layout
          on console, or run 'loadkeys $KEYTABLE' manually</li>

          <li>add &quot;setxkbmap $LANGUAGE&quot; to the keybindings section in
          your ~/.xinitrc to configure keyboard setup for the X window system
          (deactivate the xmodmap lines if necessary)</li>

        </ul>

        <p>Note: run grml-setlang to get a dialog based frontend for
        /etc/default/locale. Run grml-setkeyboard to get a dialog based frontend
        for /etc/sysconfig/keyboard.</p>

        <h3><a name="kde_and_foo"></a><a href="#toc">KDE, Gnome, $FOO and $BAR</a></h3>

        <p>Why isn't KDE, Gnome, $FOO or $BAR part of grml? grml is a
        distribution for users of texttools and sysadmins. If you would like to
        run KDE with Debian use e.g. <a href="http://sidux.com/">Sidux</a> or <a
        href="http://www.kubuntu.org/">Kubuntu</a>. Gnome users might find <a
        href="http://www.ubuntulinux.org/">Ubuntu</a> useful. If you would like
        to see a specific (software) package added to grml please <a
        href="/report/">report it to us</a>!</p>

        <h3><a name="wms"></a><a href="#toc">Which window managers can I use?</a></h3>

        <p>Grml is shipped only with window managers which are lightweight and
        fast - so well suited for a live system. At the moment, grml provides the
        following window managers:</p>
        <ul>
          <li><a href="http://awesome.naquadah.org/">awesome</a>
          <li><a href="http://wmii.de/dwm/">dwm</a>
          <li><a href="http://www.6809.org.uk/evilwm/">evilwm</a>
          <li><a href="http://www.fluxbox.org/">fluxbox</a>
          <li><a href="http://www.fvwm.org/">fvwm</a>
          <li><a href="http://fvwm-crystal.org/">fvwm-crystal</a>
          <li><a href="http://joewing.net/programs/jwm/index.shtml">jwm</a>
          <li><a href="http://icculus.org/openbox/index.php/Main_Page">openbox</a>
          <li><a href="http://pekwm.org/">pekwm</a>
          <li><a href="http://www.nongnu.org/ratpoison/">ratpoison</a>
          <li><a href="http://www.plig.org/xwinman/vtwm.html">twm</a>
          <li><a href="http://www.grassouille.org/code/w9wm/README">w9wm</a>
          <li><a href="http://www.nickgravgaard.com/windowlab/">windowlab</a>
          <li><a href="http://www.suckless.org/wiki/wmii">wmii</a>
        </ul>

        <p>Tip: If you are new to grml and/or prefer an easy-to-use-desktop run 'grml-x
        wm-ng' for starting fluxbox with idesk and gkrellm.</p>

        <h3><a name="usbmount"></a><a href="#toc">How do I mount a USB device / USB stick?</a></h3>

        <p>Run 'mount /mnt/usb-sda1' for example if you want to mount /dev/sda1.
        udev on grml does multiplexing for USB block devices, so /dev/usb-sda1
        (device for mountpoint /mnt/usb-sda1) is a symlink to /dev/sda1.</p>

        <h3><a name="lvm"></a><a href="#toc">Where are my LVM devices?</a></h3>

        <p>LVM (Logival Volumes) is <strong>not</strong> started by default to
        avoid any possible damage to your data. To get access to present LVM
        devices just execute:</p>

<pre class="rahmen">
# /etc/init.d/lvm2 start

or use the shorter version:

# Start lvm2
</pre>

        <p>If you want to enable LVM by default just boot using the 'lvm'
        bootoption which automatically enables LVM.</p>

        <h3><a name="swraid"></a><a href="#toc">Where are my Software-RAID devices?</a></h3>

        <p>Software-RAID (usually known as the mdadm stuff) is
        <strong>not</strong> started by default to avoid any possible damage to
        your data. To get access to present SW-RAID devices just execute:</p>

<pre class="rahmen">
# /etc/init.d/mdadm-raid start

or use the shorter version:

# Start mdadm-raid
</pre>

        <p>If you want to enable SW-RAID by default just boot using the 'swraid'
        bootoption which enables automatic assembling of software raid arrays.</p>

        <h3><a name="libata"></a><a href="#toc">Why doesn't grml find my disks / doesn't boot?</a></h3>

        <p>Since release 2008.11 grml uses <a
        href="http://linux-ata.org/faq.html">libata</a> exclusively (so no
        longer any old IDE code). Sadly some few (usually pretty old) systems
        don't boot with libata-only kernels anymore. If you think you've such a
        system please provide output of 'lspci' <a href="/contact/">to
        us</a>.</p>

        <a name="terminalserver"></a>
        <h3><a name="booting"></a><a href="#toc">Which ways exist to boot grml?</a></h3>

        <p>The most common way to boot grml is, of course, running from
        CD-ROM, but grml provides many more ways to boot grml:</p>

        <p>It is possible to boot grml via USB (e.g. USB stick or harddisk),
        firewire, or running from a Compact Flash disk. It works out of the box;
        you don't need to modify anything. Check out <a
        href="http://wiki.grml.org/doku.php?id=usb">the usb webpage in the
        grml-wiki</a> for more details.</p>

        <p>Your computer can not boot from CD-ROM but provides a floppy
        disk? Take a look at <a
        href="http://btmgr.sourceforge.net/">btmgr</a>, <a
        href="http://ubcd4win.com/faq.htm#floppy">ubcd4win</a> or <a
        href="http://linux.simple.be/tools/sbm">sbm</a>. They provide
        support for booting from CD-ROM via a special floppy disk.</p>

        <p>grml-terminalserver makes it possible to boot your system via network
        using <a
        href="http://en.wikipedia.org/wiki/Preboot_Execution_Environment">PXE</a>
        (Preboot Execution Environment). If your network card does not provide
        support for booting via PXE you can still boot it either using the
        provided grub image by grml-terminalserver (for example via floppy
        drive) or using <a href="http://etherboot.org/wiki/index.php">gPXE</a>.
        For more information, refer to the <a
        href="/terminalserver/">grml-terminalserver webpage</a>.</p>

        <h3><a name="timezone"></a><a href="#toc">How do I configure
        timezone on my grml system?</a></h3>

        <h4>Available bootoptions relevant in live-cd mode:</h4>

        <ul>
          <li>utc: set UTC, if your system clock is set to UTC (GMT)
          <li>gmt: set UTC, if your system clock is set to UTC (GMT) [like bootoption utc]
          <li>tz=$option: set timezone to corresponding $option, usage example:
              tz=Europe/Vienna
        </ul>

        <h4>Configuration options relevant on harddisk installation:</h4>

        <p>Run:

<pre class="rahmen">
# dpkg-reconfigure tzdata
</pre>

        <p>to adjust /etc/timezone and /etc/localtime according to the
        provided information.</p>

        <p><strong>/etc/default/rcS:</strong> set variable UTC according
        to your needs, whether your system clock is set to UTC
        (UTC='yes') or not (UTC='no')</p>

        <p><strong>/etc/localtime:</strong> adjust zoneinfo according to
        your needs:</p>

<pre class="rahmen">
# ln -sf /usr/share/zoneinfo/$WHATEVER_YOU_WANT /etc/localtime
</pre>

        <p>The zoneinfo directory contains the time zone files that were
        compiled by zic. The files contain information such as rules
        about DST. They allow the kernel to convert UTC UNIX time into
        appropriate local dates and times. Use the zdump utility to
        print current time and date (in the specified time zone).</p>

        <p><strong>/etc/adjtime:</strong> This file is used e.g. by the
        adjtimex function, which can smoothly adjust system time while
        the system runs.</p>

        <p>If you change the time (using 'date --set ...', ntpdate,...)
        it is worth setting also the hardware clock to the correct
        time:</p>

<pre class="rahmen">
# hwclock --systohc [--utc]
</pre>

        <p>Remember to add the --utc -option if the hardware clock is set to
        UTC!</p>

        <h4>Still problems?</h4>

        <p>Check your current settings via:</p>

<pre class="rahmen">
cat /etc/timezone
zdump /etc/localtime
echo $TZ
hwclock --show
grep hwclock /etc/runlevel.conf
grep '^UTC' /etc/default/rc
</pre>

        <h4>Further information:</h4>

        <p>Manpages: hwclock(8) tzselect(1) tzconfig(8); <a
        href="http://www.debian.org/doc/manuals/system-administrator/ch-sysadmin-time.html">Debian
        GNU/Linux System Administrator's Manual Chapter 16 - Time</a> and <a
        href="http://wiki.debian.org/TimeZoneChanges">TimeZoneChanges in the
        Debian-Wiki</a>.</p>

        <h3><a name="hdinstall"></a><a href="#toc">Is it possible to install grml to harddisk?</a></h3>

        <p>Yes. Grml provides a tool called <a href="/grml2hd/">grml2hd</a> (see
        '<a href="/grml2hd/grml2hd.html">man grml2hd</a>').  grml is developed
        on a box running the grml-system itself, and we - the grml-developers -
        especially like grml2hd because it gives us a working Linux box within
        10 to 30 minutes.  grml2hd is perfect for prototyping: test hardware
        support of Linux, test a specific setup, ... You can even use grml2hd in
        a fully automatic mode without any further interaction.</p>

        <p>But <strong>please note</strong>: grml2hd does <strong>NOT</strong>
        provide a Linux distribution for newbies and should be installed to hard
        disk only if really know what you are doing (or don't care about
        maintainability, seriously). Please install grml using grml2hd only if
        can answer all of the following questions with 'sure, YES':</p>

        <ul>
            <li>Are you used to work with Debian/unstable?
            <li>Do you know how to report bugs to Debian?
            <li>Are you aware of the differences between plain Debian and grml?
        </ul>

        <p><strong>Tip</strong>: If you want to get a plain Debian system take
        a look at <a href="/grml-debootstrap/">grml-debootstrap</a>.</p>

        <p><strong>Note:</strong> If you are using grml in a production
        environment and/or use a grml2hd installation, we strongly recommend you
        subscribe to <a href="/mailinglist/">the grml user mailinglist</a>!</p>

        <h2><a name="kernel"></a><a href="#toc">Kernel</a></h2>

        <h3><a name="kernelconfig"></a><a href="#toc">Where can I find the configuration for the kernel used on
        grml?</a></h3>

        <p>See /boot/config-`uname -r` and on <a href="/kernel/">the kernel-webpage</a>.</p>

        <h3><a name="kernelpatches"></a><a href="#toc">Are there any special components/patches in the kernel
        used on grml?</a></h3>

        <p>Grml uses the most current stable vanilla Linux kernel from <a
        href="http://www.kernel.org/">www.kernel.org</a> with some
        additional patches. More information and an all-in-one patch is
        available on the <a
        href="/kernel/">kernel-page</a>.</p>

        <h3><a name="platform"></a><a href="#toc">For which platforms is the grml kernel optimized?</a></h3>

        <p>Plain i586 compatibility-mode with SMP enabled. (Note: of course it
        works for uniprocessor systems as well)</p>

        <h2><a name="software"></a><a href="#toc">Software</a></h2>

        <h3><a name="sw_general"></a><a href="#toc">General</a></h3>

        <p>Want to run a program as root? Just use &quot;sudo $PROGRAM&quot;. To get a
        root-shell run &quot;sudo -i&quot;.</p>

        <p>Problems with a specific package? Please try &quot;dpkg-reconfigure $foo&quot;.
        Still encountering difficulties? Please send us a <a
        href="/bugs/">bugreport</a>.</p>

        <h3><a name="sw_version"></a><a href="#toc">Which package(s) and which
        version is available?</a></h3>

        <p>If you want to get details about the provided packages and the
        package versions without booting the grml ISO check out the dpkg_...
        files in the <a href="/files/#debian">Debian-Information section on
        grml.org/files/</a>.</p>

        <h3><a name="init"></a><a href="#toc">Init-System</a></h3>

        <p>Why is grml using runlevel 2 as default? Because runlevel 2 is 'the
        textonly one' and it is Debian's default.</p>

        <p>Where are all the /etc/rc#.d-directories? grml doesn't use sysv-rc
        but <a href="http://packages.debian.org/sid/file-rc">file-rc</a>. This
        means you can configure the init system in one single file named
        /etc/runlevel.conf with your favourite editor. No symlink-hell
        anymore.</p>

        <h3><a name="zsh"></a><a href="#toc">Why is zsh the default shell (/bin/sh)?</a></h3>

        <p>Short answer: because <a href="/zsh/">Zsh rocks</a>, really!</p>

        <p>Longer answer taken from <a
        href="http://zsh.sunsite.dk/FAQ/zshfaq01.html#l3">ZSH FAQ: 1.2: What is
        it?</a>:</p>

        <cite> Zsh is a UNIX command interpreter (shell) which of the standard shells most
        resembles the Korn shell (ksh); its compatibility with the 1988 Korn shell has been
        gradually increasing. It includes enhancements of many types, notably in the
        command-line editor, options for customising its behaviour, filename globbing, features
        to make C-shell (csh) users feel more at home and extra features drawn from tcsh
        (another `custom' shell).</cite>

        <p>If you don't know zsh take a look at <a
        href="http://zsh.sunsite.dk/FAQ/zshfaq02.html#l9">ZSH FAQ: How does zsh
        differ from ...?</a>, 'man zsh | less -p COMPATIBILITY', the <a
        href="/zsh/">grml zsh reference card</a> and '<a
        href="/zsh/">man zsh-lovers</a>'.</p>

        <p>If you are a bash user and don't know zsh yet, don't be afraid. bash
        is largely a subset of zsh and you don't have to throw away your
        knowledge about shell stuff.</p>

        <h3><a name="zsh_binsh"></a><a href="#toc">Wasn't zsh the /bin/sh interpreter?</a></h3>

        <p>Yes, until Grml 0.6 zsh was the interpreter for /bin/sh. Starting
        with release 0.7 Grml used /bin/bash as /bin/sh and nowadays /bin/dash
        is used for /bin/sh (that's what  Debian does as well). The reason?
        Using zsh as default /bin/sh interpreter leads to some problems,
        especially since Debian does not care to support zsh as /bin/sh overall.
        Take a look at <a
        href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=329288">#329288</a>
        and <a
        href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=340058">#340058</a>
        for example.</p>

        <h3><a name="bash"></a><a href="#toc">Is a bash available?</a></h3>

        <p>Grml uses <a href="#zsh">zsh</a> as the default interactive shell
        but, of course, a current version of bash (and many other shells as
        well) is provided by grml.</p>

        <h3><a name="configuration"></a><a href="#toc">Where can I find the configuration of zsh, GNU screen,...?</a></h3>

        <p>Check out <a
        href="http://michael-prokop.at/blog/2007/12/22/make-console-work-comfortable/">'Make
        console work comfortable'</a>.</p>

        <h3><a name="truecrypt">Why isn't Truecrypt available within grml?</a></h3>

        <p>Because Truecrypt is licensed under a specific license named
        'TrueCrypt License' which doesn't permit us to distribute Truecrypt (since at least
        license version 2.6).
        See <a href="http://www.truecrypt.org/legal/license">section VI/4 of the
        license</a> for details. The Ubuntu version from <a
        href="http://www.truecrypt.org/downloads">truecrypt.org/downloads</a> is
        known to work under grml.</p>

        <h3><a name="grub"></a><a href="#toc">grub does not work on my system?!</a></h3>

        <p>Looks like you used mkfs.ext3 from grml but are using an old grub
        version. Notice that older versions of grub do not support 256 byte
        inodes on ext3, being the default in recent versions of mkfs/e2fsprogs.
        More information is available at <a
        href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=463236">#463236</a>
        in the Debian bug tracking system.</p>

        <h2><a name="xserver"></a><a href="#toc">X-Server</a></h2>

        <h3><a name="xstart"></a><a href="#toc">How do I start the X server?</a></h3>

        <p>Please use 'grml-x' as user grml for starting X on the live-cd. It
        generates the config file /etc/X11/xorg.conf and lets you start commands on
        startup (see ~/.xinitrc). Use it, for example, via switching to TTY4 (press
        Alt+F4) and run the following command to start wm-ng (window manager fluxbox
        with idesk and gkrellm):</p>

<pre class="rahmen">
grml-x wm-ng</pre>

        <p>If you have /etc/X11/xorg.conf already you can use 'startx' instead of
        grml-x of course. Adjust ~/.xinitrc to your needs.</p>

        <h3><a name="xproblem"></a><a href="#toc">X does not start on my box?!</a></h3>

        <p>grml-x supports several options. If you want to set some special options
        please take a look at the grml-x manpage (man grml-x). Some usage examples:</p>

<pre class="rahmen">
grml-x -module vesa fluxbox        # start fluxbox and use vesa module
grml-x -mode '800x600' fluxbox     # set resolution to 800x600 and start fluxbox
grml-x -display 8 fluxbox          # start fluxbox on display 8
grml-x -force -nostart fluxbox     # force creation of xconfig file and don't start X server
grml-x -hsync 60 fluxbox           # set horizontal frequency and start fluxbox
grml-x -hsync 60 -vsync 40 fluxbox # set horizontal and vertical sync frequencies and start fluxbox
</pre>

        <h3><a name="xresolution"></a><a href="#toc">I don't like the resolution of X!</a></h3>

        <p>Just run xrandr to switch the resolution during runtime of X. For
        example: 'xrandr -s 1024x768'.</p>

        <h2><a name="stuff"></a><a href="#toc">Support / Unanswered stuff</a></h2>

        <h3><a name="questions"></a><a href="#toc">Further questions</a></h3>

        <p>Do you have a question which is not answered in the FAQ or in the
        provided <a href="/docs/">documentation</a> (execute
        &quot;grml-info&quot; on your grml-system for offline documentation)?
        Also check out 'grml-tips $KEYWORD' on your grml-system. Take a look at
        <a href="/">the grml website</a> and <a href="http://wiki.grml.org/">the
          grml-wiki</a>. A good place to become part of the community is the <a
          href="/mailinglist/">grml mailinglist</a>. Please don't hesitate to <a
          href="/contact/">contact us</a>.</p>

        <h3><a name="support"></a><a href="#toc">Commercial Support</a></h3>

        <p>You want to deploy Grml in your data center, use it as part of your
        business or have an emergency case? You're happy with Grml but would
        like to get your very own live cd (providing your favourite software
        selection, special configuration, setup and your bootsplash)? As part of
        our business we do provide commercial support, feel free to <a
          href="http://grml-solutions.com/">contact us at Grml
          Solutions</a>.</p>

      </div>

<?php include '../static_bottom.inc'; ?>
