<?php

if (! function_exists('money')) {
    function money($pence): string
    {
        $amount = number_format($pence / 100, 2);
        [$pounds, $decimals] = explode('.', $amount);

        return '<span>£' . $pounds . '<span class="text-gray-500 text-xs">.' . $decimals . '</span></span>';
    }

    function human_date($date): string
    {
        return $date ? \Illuminate\Support\Carbon::parse($date)->format('d M Y') : '—';
    }
}
