<?php
/**
 * Front Page Template
 *
 * @package SMRT_Theme
 */

get_header();
?>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div id="particles" class="particles"></div>
        
        <div class="relative z-10 text-center px-6 max-w-5xl mx-auto">
            <!-- Robot Icon -->
            <div class="mb-8">
                <div class="w-40 h-40 mx-auto bg-gradient-to-br from-blue-500/20 to-cyan-400/20 rounded-full overflow-hidden border-4 border-cyan-400/50 glow shadow-2xl relative z-10">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Logo" class="w-full h-full object-cover">
                </div>
            </div>
            
            <!-- Main Title -->
            <h1 class="tech-font text-5xl md:text-7xl font-bold mb-4 glow-text">
                <span class="gradient-text"><?php echo esc_html(smrt_get_option('hero_title', 'MECHANICAL')); ?></span>
            </h1>
            <h2 class="text-xl md:text-2xl text-gray-300 mb-6">
                <?php echo esc_html(smrt_get_option('hero_subtitle', 'Department of Mechanical Engineering')); ?>
            </h2>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto mb-10">
                <?php echo esc_html(smrt_get_option('hero_description', 'สาขาวิชาวิศวกรรมเครื่องกล มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์')); ?>
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#research" class="btn-primary">
                    <i class="fas fa-flask mr-2"></i>หลักสูตรปริญญญาตรี
                </a>
                <a href="#about" class="btn-secondary">
                    <i class="fas fa-info-circle mr-2"></i>หลักสูตรปริญญาโท
                </a>
            </div>
            
            <!-- Scroll Down Indicator -->
            <div class="mt-16 animate-bounce">
                <a href="#about" class="text-gray-500 hover:text-cyan-400 transition">
                    <i class="fas fa-chevron-down text-2xl"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="section-title gradient-text">เกี่ยวกับสาขาวิชา</h2>
                <p class="section-subtitle">
                    Smart Mechanical Engineer 
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="fade-in">
                    <div class="glass-card p-8 glow">
                        <h3 class="text-2xl font-bold mb-6 gradient-text">วิสัยทัศน์ของเรา</h3>
                        <p class="text-gray-300 leading-relaxed mb-6">
                            ห้องปฏิบัติการ SMRT ก่อตั้งขึ้นเพื่อเป็นศูนย์กลางการวิจัยและพัฒนาเทคโนโลยีด้านเครื่องจักรอัจฉริยะ 
                            ระบบอัตโนมัติ และหุ่นยนต์ โดยมุ่งเน้นการบูรณาการความรู้ทางวิศวกรรมเครื่องกล 
                            ร่วมกับเทคโนโลยีสมัยใหม่
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <i class="fas fa-check-circle text-cyan-400"></i>
                                <span>วิจัยและพัฒนาหุ่นยนต์อุตสาหกรรม</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fas fa-check-circle text-cyan-400"></i>
                                <span>ระบบควบคุมอัตโนมัติและ AI</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fas fa-check-circle text-cyan-400"></i>
                                <span>การออกแบบเครื่องจักรกลอัจฉริยะ</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fas fa-check-circle text-cyan-400"></i>
                                <span>IoT และ Industry 4.0</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Right - Stats -->
                <div class="grid grid-cols-2 gap-6 fade-in">
                    <div class="glass-card p-6 text-center">
                        <div class="stat-number" data-count="15">0+</div>
                        <p class="text-gray-400 mt-2">โครงการวิจัย</p>
                    </div>
                    <div class="glass-card p-6 text-center">
                        <div class="stat-number" data-count="8">0+</div>
                        <p class="text-gray-400 mt-2">บุคลากร</p>
                    </div>
                    <div class="glass-card p-6 text-center">
                        <div class="stat-number" data-count="25">0+</div>
                        <p class="text-gray-400 mt-2">ผลงานตีพิมพ์</p>
                    </div>
                    <div class="glass-card p-6 text-center">
                        <div class="stat-number" data-count="50">0+</div>
                        <p class="text-gray-400 mt-2">นักศึกษาวิจัย</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Section -->
    <section id="research" class="py-20 px-6 bg-black/20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="section-title gradient-text">งานวิจัย</h2>
                <p class="section-subtitle">
                    ผลงานวิจัยและโครงการนวัตกรรมของห้องปฏิบัติการ SMRT
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Research Card 1 -->
                <div class="glass-card research-card fade-in">
                    <div class="p-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-500/30 to-cyan-400/30 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-robot text-2xl text-cyan-400"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">หุ่นยนต์อุตสาหกรรม</h3>
                        <p class="text-gray-400 mb-4">
                            การพัฒนาหุ่นยนต์แขนกลสำหรับงานอุตสาหกรรม 
                            ระบบควบคุมอัตโนมัติและการเชื่อมต่อกับระบบ IoT
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm">Robotics</span>
                            <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm">Automation</span>
                        </div>
                    </div>
                </div>
                
                <!-- Research Card 2 -->
                <div class="glass-card research-card fade-in">
                    <div class="p-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500/30 to-pink-400/30 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-brain text-2xl text-purple-400"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">ปัญญาประดิษฐ์ในงานวิศวกรรม</h3>
                        <p class="text-gray-400 mb-4">
                            การประยุกต์ใช้ Machine Learning และ Deep Learning 
                            ในการควบคุมและทำนายพฤติกรรมของระบบเครื่องกล
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">AI/ML</span>
                            <span class="px-3 py-1 bg-pink-500/20 text-pink-400 rounded-full text-sm">Deep Learning</span>
                        </div>
                    </div>
                </div>
                
                <!-- Research Card 3 -->
                <div class="glass-card research-card fade-in">
                    <div class="p-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500/30 to-emerald-400/30 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-cogs text-2xl text-green-400"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">ระบบ Mechatronics</h3>
                        <p class="text-gray-400 mb-4">
                            การบูรณาการระบบเครื่องกล ไฟฟ้า และคอมพิวเตอร์ 
                            เพื่อสร้างระบบอัตโนมัติที่ชาญฉลาด
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Mechatronics</span>
                            <span class="px-3 py-1 bg-emerald-500/20 text-emerald-400 rounded-full text-sm">Control</span>
                        </div>
                    </div>
                </div>
                
                <!-- Research Card 4 -->
                <div class="glass-card research-card fade-in">
                    <div class="p-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500/30 to-yellow-400/30 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-industry text-2xl text-orange-400"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Industry 4.0</h3>
                        <p class="text-gray-400 mb-4">
                            การพัฒนาระบบ Smart Factory และ Digital Twin 
                            สำหรับอุตสาหกรรมการผลิตยุคใหม่
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-orange-500/20 text-orange-400 rounded-full text-sm">Industry 4.0</span>
                            <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-sm">IoT</span>
                        </div>
                    </div>
                </div>
                
                <!-- Research Card 5 -->
                <div class="glass-card research-card fade-in">
                    <div class="p-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-red-500/30 to-rose-400/30 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-cube text-2xl text-red-400"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">การพิมพ์ 3 มิติ</h3>
                        <p class="text-gray-400 mb-4">
                            เทคโนโลยี Additive Manufacturing และการออกแบบ 
                            ชิ้นส่วนเครื่องจักรด้วย 3D Printing
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-red-500/20 text-red-400 rounded-full text-sm">3D Printing</span>
                            <span class="px-3 py-1 bg-rose-500/20 text-rose-400 rounded-full text-sm">CAD/CAM</span>
                        </div>
                    </div>
                </div>
                
                <!-- Research Card 6 -->
                <div class="glass-card research-card fade-in">
                    <div class="p-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-indigo-500/30 to-violet-400/30 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-wind text-2xl text-indigo-400"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">พลังงานทดแทน</h3>
                        <p class="text-gray-400 mb-4">
                            การวิจัยและพัฒนาระบบพลังงานทดแทน 
                            กังหันลม และระบบจัดการพลังงานอัจฉริยะ
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-500/20 text-indigo-400 rounded-full text-sm">Renewable</span>
                            <span class="px-3 py-1 bg-violet-500/20 text-violet-400 rounded-full text-sm">Energy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="section-title gradient-text">บุคลากร</h2>
                <p class="section-subtitle">
                    ทีมนักวิจัยและผู้เชี่ยวชาญของห้องปฏิบัติการ SMRT
                </p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="glass-card team-card p-6 fade-in">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-1">ผศ.ดร.นิวัฒน์  สุขสาม</h3>
                    <p class="text-cyan-400 text-sm mb-3">หัวหน้าสาขาวิชา</p>
                    <p class="text-gray-400 text-sm mb-4">ผู้เชี่ยวชาญด้านความร้อนและของไหล</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:niwat.suk@rmutr.ac.th" class="text-gray-400 hover:text-cyan-400 transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="glass-card team-card p-6 fade-in">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-1">ผศ. ดร.ณัฐวุฒิ สุวรรณภูมิ</h3>
                    <p class="text-cyan-400 text-sm mb-3">อาจารย์ประจำ</p>
                    <p class="text-gray-400 text-sm mb-4">ผู้เชี่ยวชาญด้านความร้อนและของไหล</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:nattawut.suw@rmutr.ac.th" class="text-gray-400 hover:text-cyan-400 transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="glass-card team-card p-6 fade-in">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-1">ผศ. ดร.รัฐศักดิ์ พรหมมาศ</h3>
                    <p class="text-cyan-400 text-sm mb-3">อาจารย์ประจำ</p>
                    <p class="text-gray-400 text-sm mb-4">ผู้เชี่ยวชาญด้านความร้อนและของไหล</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="glass-card team-card p-6 fade-in">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-1">ผศ. 
ดร.โศภิดา สังข์สุนทร</h3>
                    <p class="text-cyan-400 text-sm mb-3">อาจารย์ประจำ</p>
                    <p class="text-gray-400 text-sm mb-4">ผู้เชี่ยวชาญด้านความร้อนและของไหล</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
				
				
                <!-- Team Member 4 -->
                <div class="glass-card team-card p-6 fade-in">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-1">ผศ.ดร.ภูวดล โพธิ์แดง </h3>
                    <p class="text-cyan-400 text-sm mb-3">อาจารย์ประจำ</p>
                    <p class="text-gray-400 text-sm mb-4">ผู้เชี่ยวชาญด้านความร้อนและของไหล</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
				<!-- Team Member 5 -->
				<div class="glass-card team-card p-6 fade-in">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-1">ผศ.ดร.ฐกัด เบญจเลิศยานนท์ </h3>
                    <p class="text-cyan-400 text-sm mb-3">อาจารย์ประจำ</p>
                    <p class="text-gray-400 text-sm mb-4">ผู้เชี่ยวชาญด้านความร้อนและของไหล</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
				<!-- Team Member 6 -->
				<div class="glass-card team-card p-6 fade-in">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-1">
ผศ. วิศิษฐ์ ลีลาผาติกุล</h3>
                    <p class="text-cyan-400 text-sm mb-3">อาจารย์ประจำ</p>
                    <p class="text-gray-400 text-sm mb-4">ผู้เชี่ยวชาญด้านความร้อนและของไหล</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
				<!-- Team Member 7 -->
				<div class="glass-card team-card p-6 fade-in">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-1">ดร.สิทธิโชค สิทธิราชา</h3>
                    <p class="text-cyan-400 text-sm mb-3">อาจารย์ประจำ</p>
                    <p class="text-gray-400 text-sm mb-4">ผู้เชี่ยวชาญด้านความร้อนและของไหล</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:sitthichok.sit@rmutr.ac.th" class="text-gray-400 hover:text-cyan-400 transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
				<!-- Team Member 8 -->
				<div class="glass-card team-card p-6 fade-in">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-1">นางสาวราตรี  แก้วมณี</h3>
                    <p class="text-cyan-400 text-sm mb-3">เจ้าหน้าที่</p>
                    <p class="text-gray-400 text-sm mb-4">ผู้เชี่ยวชาญด้านการออกแบบและ 3D Printing</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
				<!-- Team Member 9 -->
				<div class="glass-card team-card p-6 fade-in">
                    <div class="team-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-1">นาย เสรี พันธ์ชาตรี</h3>
                    <p class="text-cyan-400 text-sm mb-3">เจ้าหน้าที่</p>
                    <p class="text-gray-400 text-sm mb-4">ผู้เชี่ยวชาญด้านการออกแบบและ 3D Printing</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-cyan-400 transition"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
				
				
            </div>	
        </div>
    </section>

    <!-- Tools Section -->
    <section id="tools" class="py-20 px-6 bg-black/20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="section-title gradient-text">ลิงค์ด่วน</h2>
                <p class="section-subtitle">
                    ซอฟต์แวร์และเครื่องมือที่ใช้ในการเรียนการสอนและงานวิจัย
                </p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Tool 1 -->
                <div class="glass-card tool-card p-6 fade-in">
                    <div class="tool-icon">
                        <i class="fas fa-drafting-compass text-cyan-400"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">SolidWorks</h3>
                    <p class="text-gray-400 text-sm mb-4">ซอฟต์แวร์ออกแบบ 3D CAD สำหรับงานวิศวกรรมเครื่องกล</p>
                    <a href="#" class="text-cyan-400 text-sm hover:underline">เรียนรู้เพิ่มเติม <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <!-- Tool 2 -->
                <div class="glass-card tool-card p-6 fade-in">
                    <div class="tool-icon">
                        <i class="fas fa-code text-blue-400"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">MATLAB/Simulink</h3>
                    <p class="text-gray-400 text-sm mb-4">แพลตฟอร์มสำหรับการคำนวณเชิงตัวเลขและการจำลองระบบ</p>
                    <a href="#" class="text-cyan-400 text-sm hover:underline">เรียนรู้เพิ่มเติม <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <!-- Tool 3 -->
                <div class="glass-card tool-card p-6 fade-in">
                    <div class="tool-icon">
                        <i class="fas fa-microchip text-purple-400"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Arduino IDE</h3>
                    <p class="text-gray-400 text-sm mb-4">แพลตฟอร์มพัฒนาไมโครคอนโทรลเลอร์สำหรับงาน IoT</p>
                    <a href="#" class="text-cyan-400 text-sm hover:underline">เรียนรู้เพิ่มเติม <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <!-- Tool 4 -->
                <div class="glass-card tool-card p-6 fade-in">
                    <div class="tool-icon">
                        <i class="fab fa-python text-yellow-400"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Python & Libraries</h3>
                    <p class="text-gray-400 text-sm mb-4">NumPy, TensorFlow, OpenCV สำหรับงาน AI และ Computer Vision</p>
                    <a href="#" class="text-cyan-400 text-sm hover:underline">เรียนรู้เพิ่มเติม <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <!-- Tool 5 -->
                <div class="glass-card tool-card p-6 fade-in">
                    <div class="tool-icon">
                        <i class="fas fa-cube text-green-400"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">ANSYS</h3>
                    <p class="text-gray-400 text-sm mb-4">ซอฟต์แวร์วิเคราะห์ทางวิศวกรรมด้วย Finite Element Method</p>
                    <a href="#" class="text-cyan-400 text-sm hover:underline">เรียนรู้เพิ่มเติม <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <!-- Tool 6 -->
                <div class="glass-card tool-card p-6 fade-in">
                    <div class="tool-icon">
                        <i class="fas fa-robot text-red-400"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">ROS (Robot Operating System)</h3>
                    <p class="text-gray-400 text-sm mb-4">แพลตฟอร์มพัฒนาหุ่นยนต์มาตรฐานอุตสาหกรรม</p>
                    <a href="#" class="text-cyan-400 text-sm hover:underline">เรียนรู้เพิ่มเติม <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section id="news" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in">
                <h2 class="section-title gradient-text">ข่าวสารล่าสุด</h2>
                <p class="section-subtitle">
                    อัพเดทข่าวสาร กิจกรรม และความเคลื่อนไหวล่าสุดจากสาขาวิชา
                </p>
            </div>
            
            <?php
            $latest_news = new WP_Query(array(
                'posts_per_page' => 5,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ));
            
            if ($latest_news->have_posts()):
            ?>
                <!-- Featured Post (First) -->
                <?php $latest_news->the_post(); ?>
                <div class="glass-card overflow-hidden mb-8 fade-in">
                    <div class="grid md:grid-cols-2 gap-0">
                        <!-- Thumbnail -->
                        <div class="relative h-64 md:h-80 overflow-hidden">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                            <?php else: ?>
                                <div class="w-full h-full bg-gradient-to-br from-blue-500/30 to-cyan-400/30 flex items-center justify-center">
                                    <i class="fas fa-newspaper text-5xl text-gray-600"></i>
                                </div>
                            <?php endif; ?>
                            <div class="absolute top-4 left-4">
                                <span class="px-4 py-2 bg-gradient-to-r from-blue-500 to-cyan-400 text-white text-sm font-bold rounded-full">
                                    <i class="fas fa-star mr-1"></i> ข่าวล่าสุด
                                </span>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-8 flex flex-col justify-center">
                            <?php 
                            $categories = get_the_category();
                            if ($categories): 
                            ?>
                                <div class="mb-3">
                                    <a href="<?php echo get_category_link($categories[0]->term_id); ?>" 
                                       class="text-cyan-400 text-sm hover:underline">
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <h3 class="text-2xl font-bold mb-4">
                                <a href="<?php the_permalink(); ?>" class="text-white hover:text-cyan-400 transition">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            
                            <p class="text-gray-400 mb-6 line-clamp-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                            </p>
                            
                            <div class="flex items-center gap-4 text-sm text-gray-500 mb-6">
                                <span><i class="fas fa-calendar-alt mr-1"></i> <?php echo get_the_date(); ?></span>
                                <span><i class="fas fa-user mr-1"></i> <?php the_author(); ?></span>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="btn-primary self-start">
                                อ่านเพิ่มเติม <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Other Posts Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php while ($latest_news->have_posts()): $latest_news->the_post(); ?>
                        <article class="glass-card overflow-hidden fade-in group">
                            <!-- Thumbnail -->
                            <div class="relative h-40 overflow-hidden">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium', array(
                                        'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500'
                                    )); ?>
                                <?php else: ?>
                                    <div class="w-full h-full bg-gradient-to-br from-blue-500/20 to-cyan-400/20 flex items-center justify-center">
                                        <i class="fas fa-newspaper text-3xl text-gray-600"></i>
                                    </div>
                                <?php endif; ?>
                                
                                <?php 
                                $categories = get_the_category();
                                if ($categories): 
                                ?>
                                    <div class="absolute top-3 left-3">
                                        <span class="px-2 py-1 bg-blue-500/80 backdrop-blur text-white text-xs rounded-full">
                                            <?php echo esc_html($categories[0]->name); ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Content -->
                            <div class="p-4">
                                <span class="text-xs text-gray-500">
                                    <i class="fas fa-calendar-alt mr-1"></i> <?php echo get_the_date(); ?>
                                </span>
                                <h3 class="font-bold mt-2 line-clamp-2">
                                    <a href="<?php the_permalink(); ?>" class="text-white hover:text-cyan-400 transition">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                
                <!-- View All Button -->
                <div class="text-center mt-10">
                    <a href="<?php echo get_post_type_archive_link('post'); ?>" class="btn-secondary">
                        <i class="fas fa-newspaper mr-2"></i>ดูข่าวทั้งหมด
                    </a>
                </div>
                
            <?php else: ?>
                <div class="glass-card p-12 text-center fade-in">
                    <i class="fas fa-inbox text-5xl text-gray-600 mb-4"></i>
                    <p class="text-gray-400">ยังไม่มีข่าวสารในขณะนี้</p>
                </div>
            <?php endif; 
            wp_reset_postdata();
            ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="fade-in">
                    <h2 class="text-3xl font-bold mb-6 gradient-text">ติดต่อเรา</h2>
                    <p class="text-gray-400 mb-8">
                        สามารถติดต่อสาขาวิชาได้ที่
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500/20 to-cyan-400/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-cyan-400"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">ที่อยู่</h4>
                                <p class="text-gray-400"><?php echo nl2br(esc_html(smrt_get_option('contact_address', "อาคารปฏิบัติการคณะวิศวกรรมศาสตร์\nมหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์ ศาลายา\n96 หมู่ 3 ถนน พุทธมณฑล สาย 5\nต.ศาลายา อ.พุทธมณฑล จ.นครปฐม 73170"))); ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500/20 to-cyan-400/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-cyan-400"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">อีเมล</h4>
                                <p class="text-gray-400"><?php echo esc_html(smrt_get_option('contact_email', 'me.rmutr@gmail.com')); ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500/20 to-cyan-400/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-cyan-400"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">โทรศัพท์</h4>
                                <p class="text-gray-400"><?php echo esc_html(smrt_get_option('contact_phone', '02-4416000 ต่อ 2675')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="glass-card p-8 fade-in">
                    <h3 class="text-xl font-bold mb-6">ส่งข้อความถึงเรา</h3>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                        <input type="hidden" name="action" value="smrt_contact_form">
                        <?php wp_nonce_field('smrt_contact', 'smrt_contact_nonce'); ?>
                        
                        <div class="mb-4">
                            <label class="block text-sm text-gray-400 mb-2">ชื่อ-นามสกุล</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl focus:border-cyan-400 focus:outline-none transition text-white" placeholder="กรุณากรอกชื่อ">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm text-gray-400 mb-2">อีเมล</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl focus:border-cyan-400 focus:outline-none transition text-white" placeholder="example@email.com">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm text-gray-400 mb-2">หัวข้อ</label>
                            <input type="text" name="subject" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl focus:border-cyan-400 focus:outline-none transition text-white" placeholder="หัวข้อที่ต้องการติดต่อ">
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm text-gray-400 mb-2">ข้อความ</label>
                            <textarea name="message" rows="4" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl focus:border-cyan-400 focus:outline-none transition text-white resize-none" placeholder="กรุณากรอกรายละเอียด"></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full">
                            <i class="fas fa-paper-plane mr-2"></i>ส่งข้อความ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
