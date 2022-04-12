<x-dash-layout>
    <x-slot name="sidebar">
        @include('layouts.sidebar')
    </x-slot>

    <div class="w-full m-auto mt-4 block p-6 max-w-screen-lg bg-white rounded-lg border border-gray-200 shadow-md" >
        <div class="page-header">
          <h1 class="text-center">Pomodoro Timer</h1>
          <h2 class="text-center">
            <span>
              <button id="pomodoroButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="onPomodoroTimer()" >Pomodoro</button>
              <button id="shortButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="onShortTimer()">Short Break</button>
              <button id="longButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="onLongTimer()">Long Break</button>
            </span>
          </h2>
        </div>
        <div class="panel panel-default">
          <div class="panel-body text-center">
            <div class="timer-time timer-container">
              <div class="timer-time-set timer-box" id="currentTime">
                <span id="hoursValue">00</span><span>:</span><span id="minutesValue">00</span><span>:</span><span id="secondsValue">00</span>
              </div>
              <div class="timer-time-set timer-box" id="nextTime">
                <span id="hoursNext">00</span><span>:</span><span id="minutesNext">00</span><span>:</span><span id="secondsNext">00</span>
              </div>
            </div>
            <div>
              <button id="restartButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="onResetTimer()">
                <span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span> Reset
              </button>
              <button id="startButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="onStartTimer()">
                <span class="glyphicon glyphicon-play" aria-hidden="true"></span> Start
              </button>
              <button id="stopButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="onStopTimer()">
                <span class="glyphicon glyphicon-stop" aria-hidden="true"></span> Stop
              </button>
            </div>
          </div>

        </div>

      </div>

</x-dash-layout>
