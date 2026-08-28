<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Status Dashboard</title>
    <!-- นำเข้า Tailwind CSS สำหรับดีไซน์ที่สวยงามทันสมัย -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Prompt', sans-serif; }
        .glass {
            background: rgba(17, 24, 39, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen p-4 md:p-8 flex flex-col justify-between">

    <!-- ส่วนหัวข้อและเมนูด้านบน -->
    <div>
        <header class="flex flex-col md:flex-row justify-between items-start md:items-center pb-6 border-b border-slate-800 gap-4">
            <div>
                <h1 class="text-2xl font-semibold tracking-wide text-cyan-400">System Dashboard</h1>
                <p class="text-xs text-slate-400 mt-1">จัดการและตรวจสอบสถานะเซิร์ฟเวอร์แบบเรียลไทม์</p>
            </div>
            <div class="flex flex-wrap gap-2 text-sm bg-slate-900 p-1.5 rounded-xl border border-slate-800">
                <span class="px-4 py-1.5 bg-cyan-500/10 text-cyan-400 rounded-lg font-medium">Metrics</span>
                <span class="px-4 py-1.5 text-slate-400 hover:text-white transition cursor-pointer">Terminal</span>
                <span class="px-4 py-1.5 text-slate-400 hover:text-white transition cursor-pointer">SFTP</span>
                <span class="px-4 py-1.5 text-slate-400 hover:text-white transition cursor-pointer">Container</span>
            </div>
        </header>

        <!-- รายการเซิร์ฟเวอร์หลัก -->
        <main class="mt-8 space-y-4 max-w-4xl mx-auto">
            <h2 class="text-sm font-medium text-slate-400 uppercase tracking-wider">Active Servers</h2>

            <!-- เซิร์ฟเวอร์ตัวที่ 1 (ออนไลน์) -->
            <div class="glass p-5 rounded-2xl transition hover:border-cyan-500/50 shadow-lg">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></div>
                        <div>
                            <h3 class="font-medium text-lg text-white">Project Alpha Production</h3>
                            <p class="text-xs text-slate-400 font-mono">ubuntu@192.168.1.101:22</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-6 w-full md:w-auto justify-between md:justify-end">
                        <div class="text-right hidden sm:block">
                            <span class="text-xs text-slate-400">CPU Usage</span>
                            <div class="w-24 bg-slate-800 h-2 rounded-full mt-1 overflow-hidden">
                                <div class="bg-cyan-400 h-full w-[45%]"></div>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-emerald-500/10 text-emerald-400 text-xs rounded-full border border-emerald-500/20 font-medium">Online</span>
                    </div>
                </div>
            </div>

            <!-- เซิร์ฟเวอร์ตัวที่ 2 (ออฟไลน์) -->
            <div class="glass p-5 rounded-2xl transition hover:border-slate-700 shadow-lg opacity-75">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-3 h-3 bg-rose-500 rounded-full"></div>
                        <div>
                            <h3 class="font-medium text-lg text-white">Test Server 02</h3>
                            <p class="text-xs text-slate-400 font-mono">root@172.16.0.50:22</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-6 w-full md:w-auto justify-between md:justify-end">
                        <span class="px-3 py-1 bg-rose-500/10 text-rose-400 text-xs rounded-full border border-rose-500/20 font-medium">Offline</span>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- ส่วนท้ายเว็บ -->
    <footer class="mt-12 text-center text-xs text-slate-600 border-t border-slate-900 pt-4">
        PHP Server Monitor &bull; รันด้วย PHP <?php echo phpversion(); ?>
    </footer>

</body>
</html>
