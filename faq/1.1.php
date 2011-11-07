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

        <h1 align="center">FAQ for grml</h1>

        <p><strong>Up2date:</strong> 20081103 - applies to versions grml
        1.1 / grml64 0.2 / grml[64]-medium 0.1 / grml-small 0.4</p>

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
          <li><a href="#difference">What's the difference between grml and $OTHER-DISTRIBUTION? What are your main goals?</a></li>
          <li><a href="#knoppix">What's the difference between grml and Knoppix?</a></li>
          <li><a href="#accessibility">What does accessibility at grml mean?</a></li>
          <li><a href="#emulation">Is it possible to run grml with $EMULATOR?</a></li>
          <li><a href="#usbboot">How do I boot grml from a USB stick?</a></li>
          <li><a href="#store">Is it possible to store my settings?</a></li>
        </ol>

        <p class="toc"><a href="#grml64">grml64</a></p>
        <ol>
          <li><a href="#whatisgrml64">What is grml64?</a></li>
          <li><a href="#grml64vsnormal">What is the difference between 32 bit grml and 64 bit grml?</a></li>
        </ol>

        <p class="toc"><a href="#grmlmedium">grml-medium</a></p>
        <ol>
          <li><a href="#whatismedium">What is grml-medium?</a></li>
          <li><a href="#whatismedium64">What is grml64-medium?</a></li>
        </ol>

        <p class="toc"><a href="#grmlsmall">grml-small:</a></p>
        <ol>
          <li><a href="#whatissmall">What is grml-small?</a></li>
          <li><a href="#smallvsnormal">What is the difference between 'normal' grml and grml-small?</a></li>
          <li><a href="#grmlvsdsl">What is the difference between grml-small and DSL?</a></li>
        </ol>

        <p class="toc"><a href="#system">System</a>:</p>
        <ol>
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
          <li><a href="#nodma">Why does grml not use DMA mode?</a></li>
          <li><a href="#booting">Which ways exist to boot grml?</a></li>
          <li><a href="#timezone">How do I configure timezone on my grml system?</a></li>
          <li><a href="#utf8">I have problems with UTF-8 / Unicode</a></li>
          <li><a href="#missingfiles">I noticed some files are missing on grml</a></li>
          <li><a href="#bugreport">Bugreport</a></li>
          <li><a href="#hdinstall">Is it possible to install grml to harddisk?</a></li>
          <li><a href="#grml2hdhang">grml2hd seems to hang?!</a></li>
          <li><a href="#hardware">I have problems with my hardware!</a></li>
          <li><a href="#boot">grml does not boot on my computer!</a></li>
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
          <li><a href="#sw_version">What version of $PACKAGE is available?</a></li>
          <li><a href="#init">Init-System</a></li>
          <li><a href="#zsh">Why is zsh the default shell?</a></li>
          <li><a href="#zsh_binsh">Wasn't zsh the /bin/sh interpreter?</a></li>
          <li><a href="#bash">Is a bash available?</a></li>
          <li><a href="#configuration">Where can I find the configuration of zsh, GNU screen,...?</a></li>
          <li><a href="truecrypt">Why isn't Truecrypt available within grml?</a></li>
          <li><a href="#fdisk">fdisk/parted/... complains with something like 'unable to open /dev/sda - unrecognised disk label'?!</a></li>
          <li><a href="#setuid">setuid/SUID</a></li>
          <li><a href="#bitchx">bitchx</a></li>
          <li><a href="#ispell">ispell</a></li>
          <li><a href="#latex">LaTeX</a></li>
          <li><a href="#slapd">slapd</a></li>
        </ol>

        <p class="toc"><a href="#release">Release related issues</a>:</p>
        <ol>
          <li><a href="#known_issues">Are there any known issues with this release?</a></li>
          <li><a href="#proc_usb">Why isn't /proc/bus/usb mounted anymore?</a></li>
        </ol>

        <p class="toc"><a href="#xserver">X-Server</a></p>
        <ol>
          <li><a href="#xstart">How do I start the X server?</a></li>
          <li><a href="#xproblem">X does not start on my box?!</a></li>
          <li><a href="#xresolution">I don't like the resolution of X!</a></li>
        </ol>

        <p class="toc"><a href="#framebuffer">Framebuffer</a></p>
        <ol>
          <li><a href="#video">The boot option video does not work as expected anymore</a></li>
          <li><a href="#fbprobs">I don't see anything when booting grml?!</a></li>
        </ol>

        <p class="toc"><a href="#stuff">Unanswered stuff</a></p>
        <ol>
          <li><a href="#questions">Further questions?</a></li>
          <li><a href="#donate">You like grml? Make a donation to support our work!</a></li>
        </ol>

        <h2><a name="general"></a><a href="#toc">General</a></h2>

        <h3><a name="whatis"></a><a href="#toc">What is grml?</a></h3>

        <p>grml is a bootable CD (Live-CD) once based on <a
        href="http://www.knopper.net/knoppix/">Knoppix</a> and nowadays based on <a
        href="http://www.debian.org/">Debian</a>. grml includes a collection of
        GNU/Linux software especially for users of texttools and system
        administrators.  grml provides automatic hardware detection. You can use grml
        as a rescue system, for analyzing systems/networks, or as a working
        environment. It is not necessary to install anything to a harddisk. Due to
        on-the-fly decompression grml includes about 2.1 GB of software and
        documentation on the CD.</p>

        <h3><a name="get"></a><a href="#toc">Where do I get grml?</a></h3>

        <p>You can download grml of course: take a look at <a
        href="/download">grml.org/download/</a>. If you want
        to get an original grml-CD including <a
        href="/files/#covers">the grml-cover</a>, need a
        special amount of CDs or want your own special grml-CD (including
        your logo, your software and/or special settings) <a
        href="/contact/">please don't hesitate to contact
        us</a>! Take a look at <a
        href="http://solutions.grml.org/">grml-solutions</a> for more
        information regarding our offers.</p>

        <h3><a name="whatmeans"></a><a href="#toc">What does grml mean?</a></h3>

        <p>grml is short for 'grummel' and comes close to 'argl' or 'grrr' in English. People
        use this when they want to express their dissatisfaction/discontentedness with software
        (amongst other things):</p>

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

        <p>Codename of grml 1.1 is Skunk. The decision
        whether the Skunk is inside the gas mask or
        outside the picture is up to you.</p>

        <p>Codename of grml64 0.2 is Schwammerlklauber.
        'Schwammerlklauber' is an austrian word for
        someone who is collecting fungi.</p>

        <p>Codename of grml-medium and grml64-medium
        0.1 is Pfuh. 'Pfuh' is a german word for
        something like calling 'Phew'.</p>

        <p>Codename of grml-small 0.4 is Springinkerl. 'Springinkerl' is an
        austrian word for an uneasy child.</p>

        <h3><a name="requirements"></a><a href="#toc">Requirements for running grml</a></h3>

        <ul>

          <li>Intel-compatible CPU (i586 or later, preferably Pentium class or higher)</li>

          <li>at least 64MB of RAM (for stable use with ramdisks for unionfs and udev
          and running X window system we recommend at least 128MB)</li>

          <li>grml-small: at least 32MB RAM should be available</li>

          <li>bootable CD-ROM drive (or <a
          href="http://wiki.grml.org/doku.php?id=tips">a boot floppy</a> and standard
          CD-ROM [IDE/ATAPI or SCSI]) [or network - see <a
          href="#terminalserver">grml-terminalserver</a>]</li>

        </ul>

        <h3><a name="why"></a><a href="#toc">Why another Linux distribution?</a></h3>

        <p>There already exist &quot;<a
        href="http://www.distrowatch.com/">some</a>&quot; distributions. We decided
        to base our work on the existing infrastructure of <a
        href="http://debian.org/">Debian</a> and <a
        href="http://www.knoppix.net/">Knoppix</a> because we don't want to reinvent
        the wheel.  Some admins already use their own rescue-CD and Knoppix works but
        does not bring that many important tools for admins and users of texttools
        out of the box, so we decided to share our work with others.</p>

        <h3><a name="license"></a><a href="#toc">What's the license of grml?</a></h3>

        <p>Anything written by the grml team is published under the GPL (<a
        href="http://www.gnu.org/copyleft/gpl.html">GNU General Public License</a>).
        You don't have to pay anything for running grml. <a
        href="/donations/">Donations</a> and <a href="/contact/">feedback</a> are
        welcome of course. If you want a special LiveCD or need support, take a
        look at <a href="http://solutions.grml.org/">grml-solutions</a>.</p>

        <h3><a name="difference"></a><a href="#toc">What's the difference between grml and
        $OTHER-DISTRIBUTION? What are your main goals?</a></h3>

        <p>The main goal of grml is to be a distribution well suited for
        users of texttools and sysadmins. grml includes many important
        texttools (of course awk, sed, grep, ...  but also zsh, mutt[ng],
        slrn, vim and many others) and useful programs for admin's
        daily work. grml uses the existing infrastructure of <a
        href="http://www.debian.org/">Debian</a>. grml was once based on <a
        href="http://www.knopper.net/knoppix/">Knoppix</a> (see '<a
        href="#knoppix">What's the difference between grml and
        Knoppix?</a>' for more details). We are also merging
        useful things from other distributions/live-cds to provide a
        perfect environment.</p>

        <h3><a name="knoppix"></a><a href="#toc">What's the difference between grml and Knoppix?</a></h3>

        <p>grml comes with a vastly different set of software. Missing KDE
        and OpenOffice provides the opportunity of shipping more than 800
        packages which Knoppix does not provide on its CD version. grml
        boots a 2.6.x kernel but no X for faster startup. Knoppix is based
        on Debian/testing-experimental (using apt-pinning), but grml is
        basically based on plain Debian/unstable providing more current
        versions of software and less painfull upgrades. grml was once
        based on Knoppix but nowadays (except for a similar initial
        ramdisk) has nothing in common with Knoppix:</p>

<pre class="rahmen">
# locate knoppix
# find / -iname \*knoppix\*
#</pre>

        <p>We consider Knoppix as a brand name for live-cds nowadays and
        provide most of Knoppix' features as well. grml uses (mostly) the
        same cheatcodes for booting as Knoppix and even provides some extra
        ones. So if you are used to the basic Knoppix features you might
        find them on the grml-system as well.  Ripping out the Knoppix
        stuff makes it possible to create a grml system out of a
        Debian system and vice versa. Running 'apt-get install grml' on a
        Debian box will be officially supported in an upcoming version of
        grml.</p>

        <h3><a name="accessibility"></a><a href="#toc">What does accessibility at grml mean?</a></h3>

        <p>The grml kernel includes <a href="/kernel/#speakup">support for
        speakup</a> and provides software like brltty (using bootoption 'grml blind
        brltty=type,port,tbl'), emacspeak and flite.</p>

        <h3><a name="emulation"></a><a href="#toc">Is it possible to run grml with $EMULATOR?</a></h3>

        <p><a href="http://www.vmware.com/">VMware</a> should work without any
        problems. It's also possible to run grml with <a
        href="http://fabrice.bellard.free.fr/qemu/">QEMU</a>, an emulator for various
        CPUs which works on Linux, Windows, FreeBSD and Mac OS X. Running grml with
        QEMU has been tested successfully on Windows and Linux.  Take a look at <a
        href="/qemu/">the QEMU-grml-webpage</a>.</p>

        <h3><a name="usbboot"></a><a href="#toc">How do I boot grml from a USB stick?</a></h3>

        <p>Take a look at the script <a
        href="/scripts/grml2usb">grml2usb</a>. For more
        details, take a look at the <a
        href="http://wiki.grml.org/doku.php?id=usb">usb-webpage in the
        grml-wiki.</a></p>

        <h3><a name="store"></a><a href="#toc">Is it possible to store my settings?</a></h3>

        <p>Yes. grml provides a powerful config framework. See <a
        href="/config/">grml.org/config/</a>, <a
        href="file:///usr/share/doc/grml-saveconfig/grml-config.html">/usr/share/doc/grml-saveconfig/grml-config.html</a>
        and 'man save-config restore-config mkpersistenthome' for more
        details.</p>

        <h2><a name="grml64"></a><a href="#toc">grml64?</a></h2>

        <h3><a name="whatisgrml64"></a><a href="#toc">What is grml64?</a></h3>

        <p>grml64 is a 64bit-version of grml, based on <a
        href="http://www.debian.org/ports/amd64/">the amd64 port of
        Debian</a>.</p>

        <h3><a name="grml64vsnormal"></a><a href="#toc">What is the difference between 32 bit grml and 64 bit grml?</a></h3>

        <p>The main difference of course is that grml64 is a 64bit-version
        whereas (normal) grml is 32bit-only. grml64 provides a 64bit kernel
        which supports 32bit userspace applications. grml64 also provides
        libc6-i386, libc6-dev-i386, several lib32* packages and ia32-libs.  Due
        to space reasons and because some packages aren't available for amd64
        yet some packages are missing on grml64 compared to (normal, 32bit)
        grml.  For more details please take a look at <a
        href="http://wiki.grml.org/doku.php?id=grml64">the grml64 webpage in the
        grml-wiki</a>.</p>

        <h2><a name="grmlmedium"></a><a href="#toc">grml-medium?</a></h2>

        <h3><a name="whatismedium"></a><a href="#toc">What is grml-medium?</a></h3>

        <p>grml-medium is a grml-flavour which tries to close the gap between <a
        href="#whatissmall">grml-small</a> and <a href="#whatis">normal/large/full
        version of grml</a>. grml-medium is an ISO with a maximum size of ~200MB
        providing the most important packages a sysadmin usually needs. It
        provides the same <a href="/kernel/">kernel version</a> as normal grml
        does so you can easily integrate and use some further existing external
        modules as well. The X.org server is shipped as well as the window
        manager fluxbox. <a
        href="http://wiki.grml.org/doku.php?id=accessibility">accessibility
        features</a> are <strong>not</strong> available/supported (currently) on
        grml-medium though.</p>

        <h3><a name="whatismedium64"></a><a href="#toc">What is grml64-medium?</a></h3>

        <p>grml64-medium is the 64bit version of <a href="#whatismedium">grml-medium</a>.</p>

        <h2><a name="grmlsmall"></a><a href="#toc">grml-small?</a></h2>

        <h3><a name="whatissmall"></a><a href="#toc">What is grml-small?</a></h3>

        <p>Whereas grml provides about 2.1 GB of software on a 700 MB ISO, grml-small
        is a flavor with online ~58 MB ISO-size (~200 MB uncompressed).  It does not
        provide a lot of software but the essential stuff for being a rescue system
        on a business card CD-ROM or a small USB device. You can use the Debian
        package management system to install software on the fly (assuming you have
        network access to a Debian mirror). Take a look at the <a
        href="/files/">'Debian-Information'-section</a> if you are
        searching for the package list.</p>

        <h3><a name="smallvsnormal"></a><a href="#toc">What is the
        difference between 'normal' grml and grml-small?</a></h3>

        <p>The 700 MB-grml brings more than 2500 packages of software and a <a
        href="/kernel/">full-featured kernel</a>.  grml-small
        includes about 215 software packages, lacks documentation and manpages
        on the ISO and has a stripped-down <a
        href="/kernel/">kernel</a> (but still provides hardware
        detection of course).  <a href="#terminalserver">grml-terminalserver</a>
        and <a
        href="http://wiki.grml.org/doku.php?id=accessibility">accessibility
        features</a> are <strong>not</strong> available/supported on
        grml-small.</p>

        <h3><a name="grmlvsdsl"></a><a href="#toc">What is the
        difference between grml-small and DSL?</a></h3>

        <p>DSL and grml-small have different target audiences. <a
        href="http://www.damnsmalllinux.org/">Damn Small Linux</a> (DSL) uses
        kernel version 2.4 whereas grml-small provides a recent version of
        kernel version 2.6.  DSL provides the X window system which grml-small
        does not. grml-small on the other hand provides the most important
        packages for sysadmins and ships the original Debian package management
        which allows you to install packages of the Debian pool with no
        modifications.</p>

        <h2><a name="system"></a><a href="#toc">System</a></h2>

        <h3><a name="configure"></a><a href="#toc">Which tools exist to configure grml?</a></h3>

        <p>grml provides several scripts and tools which should make life
        easier. See 'dpkg -L grml-scripts' to get an overview of some main
        scripts. Run 'grml-config' to get a dialog interface for the most
        important scripts and tasks. Or just type 'grml-' and press tab-key to
        get a completion menu.</p>

        <h3><a name="password"></a><a href="#toc">What are the passwords of users on grml?</a></h3>

        <p>There are no default passwords. All accounts are locked by
        default.  Even local logins are not possible (unless you set a
        password or create new user accounts as root).  You can create
        valid passwords using "sudo passwd [username]" from the shell
        individually.</p>

        <h3><a name="version"></a><a href="#toc">How do I find out the version of grml</a></h3>

        <p>Run 'grml-version' or use the following command:</p>

<pre class="rahmen">
$ cat /etc/grml_version</pre>

        <h3><a name="remove_cd"></a><a href="#toc">Is it possible to run LiveCD and eject CD-ROM?</a></h3>

<pre class="rahmen">
$ sudo umount -l /cdrom
$ sudo eject /dev/cdrom # now don't run any new programs ;)
$ mount /dev/cdrom      # mount it again if needed ;)
</pre>

        <h3><a name="language"></a><a href="#toc">How do I change the language/keyboard settings?</a></h3>

        <p>By default grml uses English settings. But it is possible to
        change the settings via using either the bootparam(s) lang,
        keyboard and xkeyboard or via running grml-lang when grml is
        already running. Usage examples:</p>

<pre class="rahmen">
grml lang=de      # enter this at the bootprompt and you will get
                  # German keyboard layout and German $LANG, $LC_ALL,
                  # $LANGUAGE...
grml keyboard=de xkeyboard=de lang=at # enter this at the bootprompt
                  # and you will get German keyboard and Austrian
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

        <p>Notice: run grml-setlang to get a dialog based frontend for
        /etc/default/locale and grml-setkeyboard to get a dialog based frontend
        for /etc/sysconfig/keyboard.</p>

        <h3><a name="kde_and_foo"></a><a href="#toc">KDE, Gnome, $FOO and $BAR</a></h3>

        <p>Why isn't KDE, Gnome, $FOO or $BAR part of grml? grml is a
        distribution for users of texttools and sysadmins. If you would like to
        run KDE with Debian use e.g. <a href="http://sidux.com/">Sidux</a>, <a
        href="http://www.knopper.net/knoppix/">Knoppix</a> or <a
        href="http://www.kubuntu.org/">Kubuntu</a>.  Gnome users might find <a
        href="http://www.ubuntulinux.org/">Ubuntu</a> useful. If you would like
        to see a specific (software) package added to grml please <a
        href="/report/">report it to us</a>!</p>

        <h3><a name="wms"></a><a href="#toc">Which window managers can I use?</a></h3>

        <p>grml is shipped only with window managers which are lightweight and
        fast - so well suited for a live-CD. At the moment, grml provides the
        following window managers:
        <a href="http://wmii.de/dwm/">dwm</a>,
        <a href="http://www.6809.org.uk/evilwm/">evilwm</a>,
        <a href="http://www.fluxbox.org/">fluxbox</a>,
        <a href="http://www.fvwm.org/">fvwm</a>,
        <a href="http://fvwm-crystal.org/">fvwm-crystal</a>,
        <a href="http://modeemi.cs.tut.fi/~tuomov/ion/">ion3</a>,
        <a href="http://joewing.net/programs/jwm/index.shtml">jwm</a>,
        <a href="http://pekwm.org/">pekwm</a>,
        <a href="http://www.nongnu.org/ratpoison/">ratpoison</a>,
        <a href="http://www.plig.org/xwinman/vtwm.html">twm</a>,
        <a href="http://www.grassouille.org/code/w9wm/README">w9wm</a>,
        <a href="http://www.nickgravgaard.com/windowlab/">windowlab</a> and
        <a href="http://www.suckless.org/wiki/wmii">wmii</a>.</p>

        <p>If you are new to grml and/or prefer an easy-to-use-desktop run 'grml-x
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
        bootoption which automatically activates LVM.</p>

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

        <h3><a name="nodma"></a><a href="#toc">Why does grml not use DMA mode?</a></h3>

        <p>The harddisk is very slow and not using DMA mode? Check out whether
        your S-ATA drive is detected as /dev/hda (this is a common problem with
        ICH7 chipsets for example) and you can't set DMA mode:</p>

<pre class="rahmen">
# hdparm -d1 /dev/hda

/dev/hda:
setting using_dma to 1 (on)
HDIO_SET_DMA failed: Operation not permitted
using_dma    =  0 (off)
</pre>

        <p>Workaround: boot with the bootoptions 'hda=noprobe hda=none'.  The
        drive should be handled by the libata driver then (ata_piix for ICH7 for
        example) and should show up as /dev/sda. (grml supports the old IDE
        drivers as well as libata currently; this issue should be fixed with an
        upcoming version of grml where libata is used more exclusively.)</p>

        <a name="terminalserver"></a>
        <h3><a name="booting"></a><a href="#toc">Which ways exist to boot grml?</a></h3>

        <p>The most common way to boot grml is, of course, running from
        CD-ROM, but grml provides many more ways to boot grml:</p>

        <p>It is possible to boot grml via USB (e.g. USB stick or harddisk),
        firewire, or running from a Compact Flash disk. It works out of the
        box; you don't need to modify anything. If accessing the device
        fails, use the 'scandelay' cheatcode on bootprompt. So, boot with
        'grml scandelay'. If the timeout is still not long enough add the
        time to wait in seconds as parameter: 'grml scandelay=15'. See <a
        href="http://wiki.grml.org/doku.php?id=usb">usb-webpage in the
        grml-wiki</a> for more details.</p>

        <p>Your computer can not boot from CD-ROM but provides a floppy
        disk? Take a look at <a
        href="http://btmgr.sourceforge.net/">btmgr</a>, <a
        href="http://ubcd4win.com/faq.htm#floppy">ubcd4win</a> or <a
        href="http://linux.simple.be/tools/sbm">sbm</a>. They provide
        support for booting from CD-ROM via a special floppy disk.</p>

        <p>grml-terminalserver makes it possible to boot your system via
        network. If you have a floppy drive, you can even boot your system over
        network when your network card does not provide PXE-support! For more
        information, refer to the <a
        href="/terminalserver/">grml-terminalserver-webpage</a>.</p>

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

        <h3><a name="utf8"></a><a href="#toc">I have problems with UTF-8 / Unicode</a></h3>

        <p>Check out <a
        href="http://wiki.grml.org/doku.php?id=utf8">UTF8-webpage in the
        grml-wiki</a>.</p>

        <h3><a name="missingfiles"></a><a href="#toc">I noticed some files are missing on grml</a></h3>

        <p>Yes, output of 'debsums -a 1&gt;/dev/null' might output some
        failures.  The reason is pretty simple: some modification have been done
        because of space limitiations on the ISO. The failures are nothing to
        really care about, but as we don't hide anything we document them of
        course.</p>

        <p>On <strong>grml</strong> the following modifications have been done:

        <ul>

          <li>linux-headers-2.6.20-grml: include files
          (/usr/src/linux-headers-2.6.20-grml/include/) of foreign (!x86)
          architectures have been removed

          <li>texlive-base-bin: documentation directory
          /usr/share/doc/texlive-base-bin/pdftex/thanh/ has been removed

          <li>texlive-latex-base: documentation directories
          /usr/share/doc/texlive-latex-base/latex/base/,
          /usr/share/doc/texlive-latex-base/latex/hyperref/ and
          /usr/share/doc/texlive-latex-base/generic/babel/ have been removed

          <li>texlive-latex-recommended: documentation directory
          /usr/share/doc/texlive-latex-recommended/latex/koma-script/ has been
          removed

        </ul>

        <p>On <strong>grml64</strong> the following modifications have been done:</p>

        <ul>

          <li>some files of valgrind (/usr/lib/valgrind/x86-linux/*) have been stripped

          <li>.so files of ion3 (/usr/lib/ion3/*.so) have been stripped

        </ul>


        <p>On <strong>grml-small</strong> nearly all the documentation has been
        removed to be able to provide a ~60MB iso with kernel 2.6 and all the
        provided software.</p>

        <p>Please notice that grml ships a script named
        <strong>grml2hd-fix</strong> as part of package grml2hd-utils which
        should fix the relevant of the above errors if you <a
        href="#hdinstall">use grml as a harddisk installation</a>.</p>

        <h3><a name="bugreport"></a><a href="#toc">Bugreport</a></h3>

        <p>Take a look at the <a href="/bugs/">bugs-webpage</a>.</p>

        <h3><a name="hdinstall"></a><a href="#toc">Is it possible to install grml to harddisk?</a></h3>

        <p>Yes. grml provides a tool called grml2hd (see '<a
        href="/grml2hd/grml2hd.html">man grml2hd</a>').  grml is
        developed on a box running the grml-system itself, and we - the
        grml-developers - especially like grml2hd because it gives us a working
        Linux box within 10 to 30 minutes.  grml2hd is perfect for prototyping:
        test hardware support of Linux, test a specific setup, ... You can even
        use grml2hd in a fully automatic mode without any further interaction.
        More information is available on <a
        href="/grml2hd/">grml.org/grml2hd/</a> and <a
        href="/grml2hd/grml2hd.html">man grml2hd</a>. Notice: If
        you are using grml in a production environment and/or use a grml2hd
        installation, we strongly recommend you subscribe to <a
        href="/mailinglist/">the grml user mailinglist</a>! Note
        that grml is based on Debian unstable, so you should be familiar with
        Debian unstable if you plan to use grml as a harddisk system. If you
        want to get a plain Debian system take a look at <a
        href="/grml-debootstrap/">grml-debootstrap</a>.</p>

        <h3><a name="grml2hdhang"></a><a href="#toc">grml2hd seems to hang?!</a></h3>

        <p>grml2hd seems to hang? Switch to tty12 and take a look at the syslog output.
        If you see something like:</p>

<pre class="rahmen">
SQUASHFS error: zlib_fs returned unexpected result 0x........
SQUASHFS error: Unable to read cache block [.....]
SQUASHFS error: Unable to read inode [.....]</pre>

        <p>your ISO/CD-ROM very probably is not ok. Verify it via booting with
        grml testcd. Check your CD low-level via running:</p>

<pre class="rahmen">
# readcd -c2scan dev=/dev/cdrom</pre>

        <p>If the medium really is ok and it still fails try to boot with
        DMA deactivated via 'grml nodma ide=nodma' at the bootprompt.</p>

        <h3><a name="hardware"></a><a href="#toc">I have problems with my hardware!</a></h3>

        <p>Take a look at the script grml-hwinfo. This script generates a
        file named info.tar.bz2 which contains important information about
        your hardware. If you think we might help, please run
        grml-hwinfo and send us the file with additional, relevant
        information regarding your problem.</p>

        <h3><a name="boot"></a><a href="#toc">grml does not boot on my computer!</a></h3>

        <p>Please take a look at <a
        href="http://git.grml.org/?p=grml-live.git;a=blob_plain;f=templates/GRML/grml-cheatcodes.txt;hb=HEAD">the
        available bootparamters and cheatcodes</a> and '<a href="#booting">Which
        ways exist to boot grml?</a>'. Especially booting with 'acpi=off noapm
        noapic' might help. Bootparameter 'failsafe' provides minimal hardware
        detection using some special bootoptions. If booting hangs during stage
        &quot;Waiting for /dev to be fully populated&quot; please try booting
        with 'grml noudev'. If you don't even see the bootsplash of the grml-ISO
        your BIOS seems to be broken (pretty common especially on old hardware).
        Please consider using <a href="http://btmgr.sourceforge.net/">btmgr</a>
        then for booting your system. Also check out the <a
        href="http://wiki.grml.org/doku.php?id=problems">problems webpage</a> in
        <a href="http://wiki.grml.org/">the grml-wiki</a>. You still have
        problems? Please <a href="/contact/">contact us</a>!</p>

        <h2><a name="kernel"></a><a href="#toc">Kernel</a></h2>

        <h3><a name="kernelconfig"></a><a href="#toc">Where can I find the configuration for the kernel used on
        grml?</a></h3>

        <p>See /boot/config-`uname -r` and on <a href="/kernel/">the kernel-webpage</a>.</p>

        <h3><a name="kernelpatches"></a><a href="#toc">Are there any special components/patches in the kernel
        used on grml?</a></h3>

        <p>grml uses the most current stable vanilla Linux kernel from <a
        href="http://www.kernel.org/">www.kernel.org</a> with some
        additional patches. More information and an all-in-one patch is
        available on the <a
        href="/kernel/">kernel-page</a>.</p>

        <h3><a name="platform"></a><a href="#toc">For which platforms is the grml kernel optimized?</a></h3>

        <p>Plain i586 compatibility-mode with SMP enabled. (Notice: this works
        for uniprocessor systems as well, thanks to <a
          href="http://lwn.net/Articles/164121/">SMP alternatives</a>.)</p>

        <h2><a name="software"></a><a href="#toc">Software</a></h2>

        <h3><a name="sw_general"></a><a href="#toc">General</a></h3>

        <p>Want to run a program as root? Just use &quot;sudo $PROGRAM&quot;. To get a
        root-shell run &quot;sudo su&quot;.</p>

        <p>Problems with a specific package? Please try &quot;dpkg-reconfigure $foo&quot;.
        Still encountering difficulties? Please send us a <a
        href="/bugs/">bugreport</a>!</p>

        <h3><a name="sw_version"></a><a href="#toc">What version of $PACKAGE is
        available?</a></h3>

        <p>Take a look at the dpkg_... files in the <a
        href="/files/#debian">Debian-Information section on
        grml.org/files/</a>. </p>

        <h3><a name="init"></a><a href="#toc">Init-System</a></h3>

        <p>Why is grml using runlevel 2 as default? Because runlevel 2 is 'the
        textonly one' and it's debian's default.</p>

        <p>Where are all the /etc/rc#.d-directories? grml doesn't use
        sysv-rc but file-rc. This means you can configure the init system
        in one single file named /etc/runlevel.conf with your favourite
        editor. No symlink-hell anymore.</p>

        <h3><a name="zsh"></a><a href="#toc">Why is zsh the default shell (/bin/sh)?</a></h3>

        <p>Short answer: because zsh rocks.</p>

        <p>Longer answer taken from <a href="http://zsh.sunsite.dk/FAQ/zshfaq01.html#l3">ZSH
        FAQ: 1.2: What is it?</a>:</p>

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

        <p>If you are a bash user and don't know zsh yet, don't be afraid. bash is largely a
        subset of zsh and you don't have to throw away your knowledge about shell stuff.</p>

        <h3><a name="zsh_binsh"></a><a href="#toc">Wasn't zsh the /bin/sh interpreter?</a></h3>

        <p>Yes, until grml 0.6 zsh was the intepreter for /bin/sh. Starting
        with release 0.7 grml uses /bin/bash as /bin/sh. The reason?
        Debian does not support zsh as /bin/sh. Take a look at <a
        href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=329288">#329288</a>
        and <a
        href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=340058">#340058</a>
        for example.</p>

        <h3><a name="bash"></a><a href="#toc">Is a bash available?</a></h3>

        <p>grml uses <a href="#zsh">zsh</a> as the default interactive shell
        but, of course, a current version of bash (and many other shells as
        well) is provided by grml.</p>

        <h3><a name="configuration"></a><a href="#toc">Where can I find the configuration of zsh, GNU screen,...?</a></h3>

        <p>Check out <a
        href="http://michael-prokop.at/blog/2007/12/22/make-console-work-comfortable/">'Make
        console work comfortable'</a>.</p>

        <h3><a name="truecrypt">Why isn't Truecrypt available within grml?</a></h3>

        <p>Because Truecrypt is licensed under a specific license named 'TrueCrypt License 2.6'.</p>

        <h3><a name="fdisk"></a><a href="#toc">fdisk/parted/... complains with
        something like 'unable to open /dev/sda - unrecognised disk
        label'?!</a></h3>

        <p>The 'disk label' is libparted's word for 'partition table'. It looks
        like you installed gnu-fdisk on your system. To work around this problem
        you might want to try one the following options:</p>

        <ul>
          <li>use /sbin/fdisk.distrib from util-linux</li>
          <li>switch to sfdisk, cfdisk,...</li>
          <li>use parted's mklabel command (but please read the <a
          href="http://www.gnu.org/software/parted/manual/">parted manual</a>
          before executing this command)</li>
        </ul>

        <h3><a name="setuid"></a><a href="#toc">setuid/SUID</a></h3>

        <p>If you set a programm SUID (setuid/mode 4755), unprivileged users on your system will
        be able to run it. This <em>could</em> be a potentially security hole, so by default the
        packages are configured not to install binaries with setuid. If you want to use the
        binaries with setuid please run 'dpkg-reconfigure $packagename' or 'chmod 4755
        =programm'. The following packages are well known to have a programm with not set
        setuid:</p>

        <ul>
          <li>davfs2</li>
          <li>hddtemp</li>
          <li>pconsole</li>
          <li>pdsh</li>
          <li>rssh</li>
          <li>scponly</li>
          <li>sing</li>
        </ul>

        <h3><a name="bitchx"></a><a href="#toc">bitchx</a></h3>

        <p>Why isn't bitchx part of grml? <a
        href="http://www.google.com/search?q=bitchx+sucks">bitchx
        sucks</a>. Please use a better alternative like <a
        href="http://irssi.org/">irssi</a> or <a
        href="http://weechat.flashtux.org/index.php?lang=en">weechat</a>
        which are part of grml.</p>

        <h3><a name="ispell"></a><a href="#toc">ispell</a></h3>

        <p>You don't want to use the preselected default for ispell? Run
        'select-default-ispell' for changing it.</p>

        <h3><a name="latex"></a><a href="#toc">LaTeX</a></h3>

        <p>auctex and preview-latex are loaded by default in emacs.  If you want to load
        auctex based on your personal settings put the string "(require 'tex-site)" in your
        ~/.emacs, for preview-latex use the string '(load "preview-latex")'.<br />
        To change this run 'dpkg-reconfigure auctex' and/or 'dpkg-reconfigure
        preview-latex'.</p>

        <h3><a name="slapd"></a><a href="#toc">slapd</a></h3>

        <p>The password for the admin entry in the LDAP directory is 'grml'.</p>

        <h2><a name="release"></a><a href="#toc">Release related issues</a></h2>

        <h3><a name="known_issues"></a><a href="#toc">Are there any known issues with this release?</a></h3>

        <p>We won't hide anything. Therefore, we do provide all known
        issues/bugs publicly available:</p>

        <ul>

          <li><a href="http://wiki.grml.org/doku.php?id=grml_1.1">issues regarding
          grml 1.1</a> in <a href="http://wiki.grml.org/">the grml-wiki</a></li>

          <li><a href="http://wiki.grml.org/doku.php?id=grml64_0.2">issues
          regarding grml64 0.2</a> in <a href="http://wiki.grml.org/">the
          grml-wiki</a></li>

          <li><a href="http://wiki.grml.org/doku.php?id=grml-medium_0.1">issues
          regarding grml-medium 0.1</a> in <a href="http://wiki.grml.org/">the
          grml-wiki</a></li>

          <li><a href="http://wiki.grml.org/doku.php?id=grml64-medium_0.1">issues
          regarding grml64-medium 0.1</a> in <a href="http://wiki.grml.org/">the
          grml-wiki</a></li>

          <li><a href="http://wiki.grml.org/doku.php?id=grml-small_0.4">issues
          regarding grml-small 0.4</a> in <a href="http://wiki.grml.org/">the
          grml-wiki</a></li>

        </ul>

        <p>If you find another bug, or consider something a problem not yet
        mentioned <a href="#bugreport">please report it to us</a>!</p>

        <h3><a name="proc_usb"></a><a href="#toc">Why isn't /proc/bus/usb mounted anymore?</a></h3>

        <p>Starting with kernel 2.6.14, /dev/bus/usb replaces usbfs.
        Current versions of libusb check for /dev/bus/usb's existence and
        /proc/bus/usb is not necessary anymore (see <a
        href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=336596">#336596</a>).
        Of course 'mount /proc/bus/usb' still works; it is just not mounted
        by default anymore. If you see any problems please <a
        href="#bugreport">report them</a>.</p>

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
        please take a look at the grml-x manpage (man grml-x)! Some usage examples:</p>

<pre class="rahmen">
grml-x -display 8 fluxbox          # start fluxbox on display 8
grml-x -force -nostart fluxbox     # force creation of xconfig file and don't start X server
grml-x -hsync 60 fluxbox           # set horizontal frequency and start fluxbox
grml-x -hsync 60 -vsync 40 fluxbox # set horizontal and vertical sync frequencies and start fluxbox
grml-x -mode '800x600' fluxbox     # set resolution to 800x600 and start fluxbox
grml-x -module vesa fluxbox        # start fluxbox and use vesa module
</pre>

        <h3><a name="xresolution"></a><a href="#toc">I don't like the resolution of X!</a></h3>

        <p>Just run xrandr to switch the resolution during runtime of X. For
        example: 'xrandr -s 1024x768'.</p>

        <h2><a name="framebuffer"></a><a href="#toc">Framebuffer</a></h2>

        <h3><a name="video"></a><a href="#toc">The boot option video does not work as
        expected anymore</a></h3>

        <p>grml versions 0.4 and 0.5 provided <a
        href="/kernel/#vesafbtng">vesafb-tng</a> instead of
        normal vesafb. Starting with grml 0.6 and grml-small 0.2 vesafb-tng
        is not part of the grml-kernel anymore because it caused too many
        problems. Therefore, you can use the 'normal' vga=... option
        again.</p>

        <h3><a name="fbprobs"></a><a href="#toc">I don't see anything when booting grml?!</a></h3>

        <p>Likely, this is a problem with vesafb framebuffer. Try to boot
        with bootoption 'nofb' or 'grml vga=normal'.</p>

        <h2><a name="question"></a><a href="#toc">Further questions</a></h2>

        <p>Do you have a question which is not answered in the FAQ or in the
        provided <a href="/docs/">documentation</a> (also run
        &quot;grml-info&quot; on your grml-system)? Run 'grml-tips $KEYWORD' on
        your grml-system. Take a look at <a href="/">the
        grml-website</a> and <a href="http://wiki.grml.org/">the
        grml-wiki</a>. Please don't hesitate to <a
        href="/contact/">contact us</a>, a good place to start
        is the <a href="/mailinglist/">grml mailinglist</a>.</p>

        <h3><a name="donate"></a><a href="#toc">You like grml? Make a donation
        to support our work!</a></h3>

        <p>grml is, as every other Open-Source project, driven by the many
        contributions made by many developers. The grml-team  spends a great
        deal of their time and money toward this project.</p>

        <p>If you have been using grml you will come to remember how much money you
        or your company saves by using it and how you have been supported via
        the project mailing list, personal mail or irc.</p>

        <p>Now you can contribute by donating to grml. Your donation could either
        be money or hardware that one of the developers or the project as a whole
        needs. A donation would enable us to either support a specific
        hardware/software either at all or simply better.</p>

        <p>See <a href="/donations/">grml.org/donations/</a> for
        details. Thank you for helping us to work on grml!</p>
      </div>

<?php include '../static_bottom.inc'; ?>
