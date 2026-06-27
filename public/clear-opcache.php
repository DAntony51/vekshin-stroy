<?php
if (function_exists('opcache_reset')) {
    opcache_reset();
    echo "✅ OPcache очищен успешно!";
} else {
    echo "❌ OPcache не включён или недоступен.";
}


