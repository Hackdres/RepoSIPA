$(function () {
    $('#calendar-holder').fullCalendar({
        header: {
            left: 'prev, next',
            center: 'title',
            right: 'month, basicWeek, basicDay,'
        },
        lazyFetching: true,
        timeFormat: {
            agenda: 'h:mmt',
            '': 'h:mmt'
        },
        // events: [
        //         {
        //             title: 'All Day Event',
        //             start: '2017-04-01'
        //         },
        //         {
        //             title: 'Long Event',
        //             start: '2017-04-07',
        //             end: '2017-04-10'
        //         },
        //         {
        //             id: 999,
        //             title: 'Repeating Event',
        //             start: '2017-04-09T16:00:00'
        //         },
        //         {
        //             id: 999,
        //             title: 'Repeating Event',
        //             start: '2017-04-16T16:00:00'
        //         },
        //         {
        //             title: 'Click for Google',
        //             url: 'http://google.com/',
        //             start: '2017-04-28'
        //         }
        //     ]

        eventSources: [
            {
                url: '/full-calendar/load',
                type: 'POST',
                data: {},
                error: function () {}
            }
        ]
    });
});
