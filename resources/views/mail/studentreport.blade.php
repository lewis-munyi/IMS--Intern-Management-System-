Hello <i>{{ $report->receiver }}</i>,
<p>This is a report email for testing purposes! Also, it's the HTML version.</p>

<p><u>report object values:</u></p>

<div>
    <p><b>report One:</b>&nbsp;{{ $report->report_one }}</p>
    <p><b>report Two:</b>&nbsp;{{ $report->report_two }}</p>
</div>

<p><u>Values passed by With method:</u></p>

<div>
    <p><b>testVarOne:</b>&nbsp;{{ $testVarOne }}</p>
    <p><b>testVarTwo:</b>&nbsp;{{ $testVarTwo }}</p>
</div>

Thank You,
<br/>
<i>{{ $report->sender }}</i>